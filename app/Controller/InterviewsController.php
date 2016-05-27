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
	public $components = array('Paginator');
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

			$lang = $this->__setLang();
			$prof = $this->Interview->prof($id);
			$this->set(compact('lang', 'prof'));

			//面接候補者リスト(まだ面接に設定されていない)
			$trainees = $this->Trainee->candidateTraineeList($id);
			//面接予定者(面接予定)
			$candidates = $this->InterviewCandidate->candidateList($id);
			$this->set(compact('candidates', 'trainees'));

			$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
			$this->request->data = $this->Interview->find('first', $options);
		}

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
