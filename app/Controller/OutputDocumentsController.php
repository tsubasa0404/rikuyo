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

		$interview_prof = $this->Interview->printProf($interview_id);
		$agent = $this->Agent->find('all', array('conditions' => array('Agent.id' => $interview_prof[0]['Interview']['agent_id'])));
		$trainees = $this->InterviewCandidate->successTrainees($interview_id);
		$option_agents = $this->Agent->find('list', array('fields' => array('id', 'agent_en')));
		$jobs = $this->_getJobArr($interview_prof[0]['Interview']['job']);
		$sectors = $this->_getSectorArr($interview_prof[0]['Association']['sector']);

		$this->set(compact('interview_prof', 'agent', 'trainees', 'option_agents', 'jobs', 'sectors'));
		$this->render($ctp_name);
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
