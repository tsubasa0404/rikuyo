<?php
App::uses('AppController', 'Controller');
/**
 * InterviewResults Controller
 *
 * @property InterviewResult $InterviewResult
 * @property PaginatorComponent $Paginator
 */
class InterviewResultsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InterviewResult->recursive = 0;
		$this->set('interviewResults', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InterviewResult->exists($id)) {
			throw new NotFoundException(__('Invalid interview result'));
		}
		$options = array('conditions' => array('InterviewResult.' . $this->InterviewResult->primaryKey => $id));
		$this->set('interviewResult', $this->InterviewResult->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterviewResult->create();
			if ($this->InterviewResult->save($this->request->data)) {
				$this->Session->setFlash(__('The interview result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview result could not be saved. Please, try again.'));
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
		if (!$this->InterviewResult->exists($id)) {
			throw new NotFoundException(__('Invalid interview result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InterviewResult->save($this->request->data)) {
				$this->Session->setFlash(__('The interview result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview result could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InterviewResult.' . $this->InterviewResult->primaryKey => $id));
			$this->request->data = $this->InterviewResult->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InterviewResult->id = $id;
		if (!$this->InterviewResult->exists()) {
			throw new NotFoundException(__('Invalid interview result'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InterviewResult->delete()) {
			$this->Session->setFlash(__('The interview result has been deleted.'));
		} else {
			$this->Session->setFlash(__('The interview result could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
