<?php
App::uses('AppController', 'Controller');
/**
 * InterviewCandidates Controller
 *
 * @property InterviewCandidate $InterviewCandidate
 * @property PaginatorComponent $Paginator
 */
class InterviewCandidatesController extends AppController {

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
		$this->InterviewCandidate->recursive = 0;
		$this->set('interviewCandidates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InterviewCandidate->exists($id)) {
			throw new NotFoundException(__('Invalid interview candidate'));
		}
		$options = array('conditions' => array('InterviewCandidate.' . $this->InterviewCandidate->primaryKey => $id));
		$this->set('interviewCandidate', $this->InterviewCandidate->find('first', $options));
	}

	public function addAjax(){
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){

			$this->InterviewCandidate->create();
			if ($this->InterviewCandidate->save($this->request->data)) {
				echo json_encode($this->InterviewCandidate->getLastInsertID());
				// return $this->Session->setFlash('The time card has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The Candidate could not be saved. Please, try again.', 'flash_failure');
			}
		}
	}

	public function updateResultAjax(){
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
			$this->request->data['InterviewCandidate']['id'] = $_POST['id'];
			$this->request->data['InterviewCandidate']['trainee_id'] = $_POST['trainee_id'];
			$this->request->data['InterviewCandidate']['interview_result_id'] = $_POST['interview_result_id'];
			if ($this->InterviewCandidate->save($this->request->data)) {
				echo json_encode($this->InterviewCandidate->getLastInsertID());
				// return $this->Session->setFlash('The time card has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The Candidate could not be saved. Please, try again.', 'flash_failure');
			}
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterviewCandidate->create();
			if ($this->InterviewCandidate->save($this->request->data)) {
				$this->Session->setFlash(__('The interview candidate has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The interview candidate could not be saved. Please, try again.'));
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
		if (!$this->InterviewCandidate->exists($id)) {
			throw new NotFoundException(__('Invalid interview candidate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InterviewCandidate->save($this->request->data)) {
				$this->Session->setFlash(__('The interview candidate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview candidate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InterviewCandidate.' . $this->InterviewCandidate->primaryKey => $id));
			$this->request->data = $this->InterviewCandidate->find('first', $options);
		}
		$interviews = $this->InterviewCandidate->Interview->find('list');
		$trainees = $this->InterviewCandidate->Trainee->find('list');
		$interviewResults = $this->InterviewCandidate->InterviewResult->find('list');
		$this->set(compact('interviews', 'trainees', 'interviewResults'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InterviewCandidate->id = $id;
		if (!$this->InterviewCandidate->exists()) {
			throw new NotFoundException(__('Invalid interview candidate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InterviewCandidate->delete()) {
			$this->Session->setFlash(__('The interview candidate has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The interview candidate could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect($this->referer());
	}

	public function deleteAjax() {
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		}
		if($this->request->is('ajax')){
			$id = $_POST['id']; //404エラーのポイント。request-dataで取れてないことを疑え。
			$this->InterviewCandidate->id = $id;
		}
		if (!$this->InterviewCandidate->exists($id)) {
			throw new NotFoundException(__('Invalid Interview Candidate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InterviewCandidate->delete()) {
			return true;
		} else {
			return ;
		}
	}
}
