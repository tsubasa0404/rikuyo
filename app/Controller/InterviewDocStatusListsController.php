<?php
App::uses('AppController', 'Controller');
/**
 * InterviewDocStatusLists Controller
 *
 * @property InterviewDocStatusList $InterviewDocStatusList
 * @property PaginatorComponent $Paginator
 */
class InterviewDocStatusListsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InterviewDocStatusList->recursive = 0;
		$this->set('interviewDocStatusLists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InterviewDocStatusList->exists($id)) {
			throw new NotFoundException(__('Invalid interview doc status list'));
		}
		$options = array('conditions' => array('InterviewDocStatusList.' . $this->InterviewDocStatusList->primaryKey => $id));
		$this->set('interviewDocStatusList', $this->InterviewDocStatusList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterviewDocStatusList->create();
			if ($this->InterviewDocStatusList->save($this->request->data)) {
				$this->Session->setFlash(__('The interview doc status list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview doc status list could not be saved. Please, try again.'));
			}
		}
		$interviews = $this->InterviewDocStatusList->Interview->find('list');
		$associationDocuments = $this->InterviewDocStatusList->AssociationDocument->find('list');
		$statusLists = $this->InterviewDocStatusList->StatusList->find('list');
		$this->set(compact('interviews', 'associationDocuments', 'statusLists'));
	}

	public function addAjax() {
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
			$this->request->data['InterviewDocStatusList']['id'] = $_POST['id'];
			$this->request->data['InterviewDocStatusList']['interview_id'] = $_POST['interview_id'];
			$this->request->data['InterviewDocStatusList']['association_document_id'] = $_POST['association_document_id'];
			$this->request->data['InterviewDocStatusList']['status_id'] = $_POST['status_id'];
			$this->InterviewDocStatusList->create();
			if ($this->InterviewDocStatusList->save($this->request->data)) {
				echo json_encode($this->InterviewDocStatusList->getLastInsertID());
				// return $this->Session->setFlash('The time card has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The Candidate could not be saved. Please, try again.', 'flash_failure');
			}
		}
	}
	public function updateAjax() {
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
			$this->request->data['InterviewDocStatusList']['id'] = $_POST['id'];
			$this->request->data['InterviewDocStatusList']['interview_id'] = $_POST['interview_id'];
			$this->request->data['InterviewDocStatusList']['association_document_id'] = $_POST['association_document_id'];
			$this->request->data['InterviewDocStatusList']['status_id'] = $_POST['status_id'];
			if ($this->InterviewDocStatusList->save($this->request->data)) {
				echo json_encode($this->InterviewDocStatusList->getLastInsertID());
				// return $this->Session->setFlash('The time card has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The Candidate could not be saved. Please, try again.', 'flash_failure');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InterviewDocStatusList->exists($id)) {
			throw new NotFoundException(__('Invalid interview doc status list'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InterviewDocStatusList->save($this->request->data)) {
				$this->Session->setFlash(__('The interview doc status list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview doc status list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InterviewDocStatusList.' . $this->InterviewDocStatusList->primaryKey => $id));
			$this->request->data = $this->InterviewDocStatusList->find('first', $options);
		}
		$interviews = $this->InterviewDocStatusList->Interview->find('list');
		$associationDocuments = $this->InterviewDocStatusList->AssociationDocument->find('list');
		$statusLists = $this->InterviewDocStatusList->StatusList->find('list');
		$this->set(compact('interviews', 'associationDocuments', 'statusLists'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InterviewDocStatusList->id = $id;
		if (!$this->InterviewDocStatusList->exists()) {
			throw new NotFoundException(__('Invalid interview doc status list'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InterviewDocStatusList->delete()) {
			$this->Session->setFlash(__('The interview doc status list has been deleted.'));
		} else {
			$this->Session->setFlash(__('The interview doc status list could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
