<?php
App::uses('AppController', 'Controller');
/**
 * Interviews Controller
 *
 * @property Interview $Interview
 * @property PaginatorComponent $Paginator
 */
class InterviewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Sort','My');
	public $uses = array(
		'Agent',
		'Association',
		'AssociationDocument',
		'Company',
		'Interview',
		'InterviewCandidate',
		'InterviewResult',
		'InterviewDocStatusList',
		'Job',
		'Trainee'
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$lang = $this->__setLang();
		$this->Interview->recursive = -1;
		$interviews = $this->Interview->interviewList();
		$past_interviews = $this->Interview->pastInterviewsList();
		$this->set(compact('lang', 'interviews', 'past_interviews'));
	}

	public function update_status() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['Interview']['id'] = $_POST['id'];
	    $this->request->data['Interview']['status'] = $_POST['status'];
	    if ($this->Interview->save($this->request->data)) {

	    } else {
	    }
	  }
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
		$this->set('interview', $this->Interview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$job_array = implode(',', $this->request->data['Interview']['job']);
			$this->request->data['Interview']['job'] = $job_array;

			$this->Interview->create();
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'error_flash');
			}
		}
		$this->Company->recursive = -1;

		//言語切り替え変数$lang取得
		$lang = $this->__setLang();

		//組合リスト(言語切り替え機能済み)取得
		$option_associations = $this->Association->optionAssociations($lang);
		//職種(言語切り替え機能済み)取得

		$option_jobs = $this->Job->optionJobs($lang);


		//企業リスト(言語切り替えおよびKeyに組合名を追加)
		$option_companies = $this->Company->__optionComAso($lang);

		$this->set(compact('lang','option_companies', 'option_jobs', 'option_companies'));
	}

	public function jobAdd() {
		if ($this->request->is('post')) {

			$interview_id = $this->request->data['Interview']{'id'};
			$job_array = implode(',', $this->request->data['Interview']['job']);
			$this->request->data = array(
				'id' => $interview_id,
				'job' => $job_array
				);

			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

	public function update() {

		if ($this->request->is('post')) {
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

	public function profile($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'error_flash');
			}
		} else {

      $lang             = $this->__setLang();
      $prof             = $this->Interview->prof($id); //interviewの詳細
      $option_jobs      = $this->Job->optionJobs($lang);
      $option_agents      = $this->Agent->optionAgents($lang);
      $option_companies = $this->Company->__optionComAso($lang);

      $option_results   = $this->InterviewResult->optionResults($lang);
			$this->set(compact('lang', 'prof', 'option_companies', 'option_jobs','option_agents', 'option_results'));

			//面接候補者
			$candidates = $this->InterviewCandidate->candidateList($id);
			$this->set(compact('candidates'));

			//提出書類一覧取得
      $association_id = $prof['Asso']['id']; //Association ID取得
			$folders = $this->AssociationDocument->selectedFolders($association_id);//folderを取得
			$documents = $this->AssociationDocument->selectedDocuments($association_id, $id);
			$this->set(compact('documents', 'folders'));

			$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
			$this->request->data = $this->Interview->find('first', $options);
		}

	}

	public function select($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$this->Trainee->recursive = -1;
			$this->Interview->recursive = -1;
			$this->InterviewCandidate->recursive = -1;
			$this->InterviewDocStatusList->recursive = -1;

			if($this->__setLang()) {
				$lang = $this->__setLang();
			} else {
				$lang = "en";
			};
			$prof = $this->Interview->prof($id);
			$this->set(compact('lang', 'prof'));

			//面接候補者リスト(まだ面接に設定されていない)
			$trainees = $this->Trainee->candidateTraineeList($id);
			//面接予定者(面接予定)
			$candidates = $this->InterviewCandidate->candidateList($id);

			//検索用Jobリスト
			$option_jobs = $this->Job->optionJobs($lang);

			$this->set(compact('candidates', 'trainees', 'option_jobs'));

			$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
			$this->request->data = $this->Interview->find('first', $options);
		}

	}

	public function advanced_search($interview_id){
    $search_options     = array();

    $age1               = $this->request->data['Interview']['age1'];
    $age2               = $this->request->data['Interview']['age2'];
    $height1            = $this->request->data['Interview']['height1'];
    $height2            = $this->request->data['Interview']['height2'];
    $weight1            = $this->request->data['Interview']['weight1'];
    $weight2            = $this->request->data['Interview']['weight2'];
    $marriage           = $this->request->data['Interview']['marriage'];
    $english            = $this->request->data['Interview']['english'];
    $academic_history   = $this->request->data['Interview']['academic_history'];
    $work_experience    = $this->request->data['Interview']['trainee_job'];
    $job_expectation    = $this->request->data['Interview']['job_expectation'];
    $interview_status   = $this->request->data['Interview']['interview_status'];

    if(empty($age1))    { $age1    = "10"  ;};
    if(empty($age2))    { $age2    = "100" ;};
    if(empty($height1)) { $height1 = "100" ;};
    if(empty($height2)) { $height2 = "250" ;};
    if(empty($weight1)) { $weight1 = "20"  ;};
    if(empty($weight2)) { $weight2 = "200" ;};
    if(empty($english)) { $english = "0,1" ;};

    !empty($marriage) ? $marriage
    	= implode(",",$marriage) : $marriage = "married,single";
    !empty($academic_history) ? $academic_history
    	= implode(",",$academic_history) : $academic_history = "1,2,3,4";
    $work_experience  ? $work_experience
    	= implode(",",$work_experience) : $work_experience = "";
    $job_expectation  ? $job_expectation
    	= implode(",",$job_expectation) : $job_expectation = "";
    !empty($interview_status) ? $interview_status
    	= implode(",",$interview_status) : $interview_status = "0,2"; //0:not yet, 2:cancel

    $advanced_search_options['age1']              = $age1;
    $advanced_search_options['age2']              = $age2;
    $advanced_search_options['height1']           = $height1;
    $advanced_search_options['height2']           = $height2;
    $advanced_search_options['weight1']           = $weight1;
    $advanced_search_options['weight2']           = $weight2;
    $advanced_search_options['marriage']          = $marriage;
    $advanced_search_options['english']           = $english;
    $advanced_search_options['academic_history']  = $academic_history;
    $advanced_search_options['work_experience']   = $work_experience;
    $advanced_search_options['job_expectation']   = $job_expectation;
    $advanced_search_options['interview_status']  = $interview_status;


    $advanced_search_result = $this->Trainee->advanced_search($advanced_search_options, $interview_id);
    $this->set(compact('advanced_search_options', 'advanced_search_result','interview_id'));

    	if($this->__setLang()) {
				$lang = $this->__setLang();
			} else {
				$lang = "en";
			};

			$prof = $this->Interview->prof($interview_id);
			$this->set(compact('lang', 'prof'));

			//面接候補者リスト(まだ面接に設定されていない)
			// $trainees = $this->Trainee->candidateTraineeList($interview_id);
			// //面接予定者(面接予定)
			$candidates = $this->InterviewCandidate->candidateList($interview_id);

			// //検索用Jobリスト
			$option_jobs = $this->Job->optionJobs($lang);
			$this->set(compact('option_jobs','candidates'));

			//Jobの複数選択によるselectedエラーをここで回避
			$selected_work_experience = $this->My->implode_variable($advanced_search_options['work_experience']);
			$selected_job_expectation = $this->My->implode_variable($advanced_search_options['job_expectation']);



			$this->set(compact('selected_work_experience', 'selected_job_expectation'));
	}


	public function success($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}

		  $lang             = $this->__setLang();
      $prof             = $this->Interview->prof($id); //interviewの詳細
      $option_jobs      = $this->Job->optionJobs($lang);
      $option_companies = $this->Company->__optionComAso($lang);

      $option_results   = $this->InterviewResult->optionResults($lang);
			$this->set(compact('lang', 'prof', 'option_companies', 'option_jobs', 'option_results'));

			//面接候補者
			$candidates = $this->InterviewCandidate->candidateList($id);
			$this->set(compact('candidates'));

			//提出書類一覧取得
      $association_id = $prof['Asso']['id']; //Association ID取得
			$folders = $this->AssociationDocument->selectedFolders($association_id);//folderを取得
			$documents = $this->AssociationDocument->selectedDocuments($association_id);
			$this->set(compact('documents', 'folders'));

			$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
			$this->request->data = $this->Interview->find('first', $options);

	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
			$this->request->data = $this->Interview->find('first', $options);
		}
		$companies = $this->Interview->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Interview->id = $id;
		if (!$this->Interview->exists()) {
			throw new NotFoundException(__('Invalid interview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Interview->delete()) {
			$this->Session->setFlash(__('The interview has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The interview could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function update_delete_flag($id = null){
		if(!$this->Interview->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Interview->save($this->request->data)){
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'), 'error_flash');
			}
		}
	}

}
