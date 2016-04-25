<?php
App::uses('AppController', 'Controller');
/**
 * OutputDocuments Controller
 *
 * @property OutputDocument $OutputDocument
 * @property PaginatorComponent $Paginator
 */
class OutputDocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	public $uses = array(
		'OutputDocument',
		'DocName',
		'Interview',
		'InterviewCandidate',
		'Trainee',
		'Association',
		'Agent',
		'Company',
		'Job',
		'Sector',
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OutputDocument->recursive = 0;
		$this->set('outputDocuments', $this->Paginator->paginate());
	}

	public function doc_list($interview_id ) {
		$this->OutputDocument->recursive = -1;

		$interview_prof = $this->Interview->printProf($interview_id);
		$documents_list = $this->OutputDocument->find('all');
		$this->set(compact('interview_prof', 'documents_list'));
	}

	public function printout($interview_id, $ctp_name){
		$lang = $this->__setLang();

		$interview_prof = $this->Interview->printProf($interview_id);
		$agent          = $this->Agent->find('all', array(
			'conditions' => array('Agent.id' => $interview_prof[0]['Interview']['agent_id'])));
		$agents         = $this->Agent->optionAgents($lang);
		$option_agents  = $this->Agent->find('list', array('fields' => array('id', 'agent_en')));
    $trainees       = $this->InterviewCandidate->successTrainees($interview_id);
    $candidates     = $this->InterviewCandidate->candidateList($interview_id);
    $jobs           = $this->_getJobArr($interview_prof[0]['Interview']['job']);
    $sectors        = $this->_getSectorArr($interview_prof[0]['Association']['sector']);



		//該当面接の企業が加盟している組合の、他の企業のインタビュー一覧を取得
		$same_association_interviews =
			$this->_getSameAssociationInterviews($interview_prof[0]['Association']['id']);

		if($this->request->is('post')){
			$interview_ids = $_REQUEST['interview_id'];

      $selected_interviews          = array();
      $selected_interview_trainees  = array();

			foreach ($interview_ids as $selected_interview_id) {
				$selected_interview = $this->Interview->selected_interview($selected_interview_id);
				array_push($selected_interviews, $selected_interview);

				$selected_interview_trainee = $this->InterviewCandidate->successTrainees($selected_interview_id);
				array_push($selected_interview_trainees, $selected_interview_trainee);
			}

			$formated_trainees_array = array();
			foreach($selected_interview_trainees as $trainees_array){
				foreach($trainees_array as $trainee){
					array_push($formated_trainees_array, $trainee);
				}
			}

			$job_ids_array = array();
			foreach ($selected_interviews as $selected_interview) {
				$job_ids = $selected_interview[0]['Interview']['job'];
				array_push($job_ids_array, $job_ids);
			}
      $job_ids_array_to_str         = implode(',', $job_ids_array);
      $job_ids_array_to_array       = explode(',', $job_ids_array_to_str);
      $job_ids_array_unique         = array_unique($job_ids_array_to_array);
      $job_ids_array_unique_to_str  = implode(',', $job_ids_array_unique);
      $selected_interview_jobs = $this->_getJobArr($job_ids_array_unique_to_str);


			$this->set(compact('selected_interviews', 'interview_ids','selected_interview_trainees', 'formated_trainees_array', 'job_ids_array_unique_to_str', 'selected_interview_jobs'));
		}


		$this->set(compact(
			'interview_prof', 'agent','agents', 'trainees','candidates', 'option_agents', 'jobs', 'sectors',
			 'same_association_companies', 'company_ids', 'same_association_interviews'));
		$this->render($ctp_name);
	}

	//同一の組合に属する企業の面接を取得
	public function _getSameAssociationInterviews($association_id){
		$same_association_companies = $this->Company->find('list', array(
			'conditions' => array('association_id'=>$association_id)));
		//キーを配列に格納して
		$company_ids = array();
		foreach($same_association_companies as $company_id){
			array_push($company_ids, $company_id);
		}
		return $same_association_interviews = $this->Interview->same_association_interviews($company_ids);
	}

	public function _getJobArr($jobs_id){
		$jobs_arr = explode(',', $jobs_id);
		$jobs = array();
		foreach ($jobs_arr as $job_id) {
			$job = $this->Job->find('all', array('conditions'=>array('id'=>$job_id), 'fields' => array('id', 'job_en', 'job_jp'), 'recursive'=> -1));
			array_push($jobs, $job);
		}
		return $jobs;
	}

	public function _getSectorArr($sectors_id){
		$sectors_arr = explode(',', $sectors_id);
		$sectors = array();
		foreach ($sectors_arr as $sector_id) {
			$sector = $this->Sector->find('all', array('conditions'=>array('id'=>$sector_id), 'fields' => array('id', 'sector_en', 'sector_jp'), 'recursive'=> -1));
			array_push($sectors, $sector);
		}
		return $sectors;
	}

	public function getTraineeAjax(){
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);

			$trainee_id = $_GET['trainee_id'];
			$trainee_info = $this->Trainee->getTraineeAjax($trainee_id);
			echo json_encode($trainee_info, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

		}
	}
	public function getAgentAjax(){
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);

			$agent_id = $_GET['agent_id'];
			$agent_info = $this->Agent->getAgentAjax($agent_id);
			echo json_encode($agent_info, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
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
		if (!$this->OutputDocument->exists($id)) {
			throw new NotFoundException(__('Invalid output document'));
		}
		$options = array('conditions' => array('OutputDocument.' . $this->OutputDocument->primaryKey => $id));
		$this->set('outputDocument', $this->OutputDocument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OutputDocument->create();
			if ($this->OutputDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The output document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The output document could not be saved. Please, try again.'));
			}
		}
		$docTemplates = $this->OutputDocument->DocTemplate->find('list');
		$this->set(compact('docTemplates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OutputDocument->exists($id)) {
			throw new NotFoundException(__('Invalid output document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OutputDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The output document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The output document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OutputDocument.' . $this->OutputDocument->primaryKey => $id));
			$this->request->data = $this->OutputDocument->find('first', $options);
		}
		$docTemplates = $this->OutputDocument->DocTemplate->find('list');
		$this->set(compact('docTemplates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OutputDocument->id = $id;
		if (!$this->OutputDocument->exists()) {
			throw new NotFoundException(__('Invalid output document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OutputDocument->delete()) {
			$this->Session->setFlash(__('The output document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The output document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
