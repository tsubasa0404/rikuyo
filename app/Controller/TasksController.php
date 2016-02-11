<?php
App::uses('AppController', 'Controller');
/**
 * Tasks Controller
 *
 * @property Task $Task
 * @property PaginatorComponent $Paginator
 */
class TasksController extends AppController {

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
		$this->Task->recursive = 0;
		$this->set('tasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
		$this->set('task', $this->Task->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Task->create();
			if ($this->Task->save($this->request->data)) {
				$this->Session->setFlash(__('The task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->Task->Status->find('list');
		$this->set(compact('statuses'));
	}

	public function addAjax() {
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
			$this->request->data['Task']['id'] = $_POST['id'];
			$this->request->data['Task']['task'] = $_POST['task'];
			$this->request->data['Task']['someone'] = $_POST['someone'];
			$this->request->data['Task']['expected_date'] = $_POST['expected_date'];
			$this->request->data['Task']['status_id'] = $_POST['status_id'];
			$this->Task->create();
			if ($this->Task->save($this->request->data)) {
				echo json_encode($this->Task->getLastInsertID());
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
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Task->save($this->request->data)) {
				$this->Session->setFlash(__('The task has been saved.'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
			} else {
				$this->Session->setFlash(__('The task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
			$this->request->data = $this->Task->find('first', $options);
		}
		$statuses = $this->Task->Status->find('list');
		$this->set(compact('statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Task->id = $id;
		if (!$this->Task->exists()) {
			throw new NotFoundException(__('Invalid task'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Task->delete()) {
			$this->Session->setFlash(__('The task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The task could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}

	public function delete_ajax($id = null) {
		$this->autoRender = false;
		$this->autoLayout = false;
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
			$this->Task->id = $id;
			if (!$this->Task->exists()) {
				throw new NotFoundException(__('Invalid task'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Task->delete()) {
				$this->Session->setFlash(__('The task has been deleted.'));
			} else {
				$this->Session->setFlash(__('The task could not be deleted. Please, try again.'));
			}
		}

	}
}
