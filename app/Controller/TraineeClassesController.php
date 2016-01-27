<?php
App::uses('AppController', 'Controller');
/**
 * TraineeClasses Controller
 *
 * @property TraineeClass $TraineeClass
 * @property PaginatorComponent $Paginator
 */
class TraineeClassesController extends AppController {

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
		$this->TraineeClass->recursive = 0;
		$this->set('traineeClasses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeClass->exists($id)) {
			throw new NotFoundException(__('Invalid trainee class'));
		}
		$options = array('conditions' => array('TraineeClass.' . $this->TraineeClass->primaryKey => $id));
		$this->set('traineeClass', $this->TraineeClass->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeClass->create();
			if ($this->TraineeClass->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee class has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee class could not be saved. Please, try again.'));
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
		if (!$this->TraineeClass->exists($id)) {
			throw new NotFoundException(__('Invalid trainee class'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeClass->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee class has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee class could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeClass.' . $this->TraineeClass->primaryKey => $id));
			$this->request->data = $this->TraineeClass->find('first', $options);
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
		$this->TraineeClass->id = $id;
		if (!$this->TraineeClass->exists()) {
			throw new NotFoundException(__('Invalid trainee class'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeClass->delete()) {
			$this->Session->setFlash(__('The trainee class has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee class could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
