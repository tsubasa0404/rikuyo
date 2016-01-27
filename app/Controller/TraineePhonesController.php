<?php
App::uses('AppController', 'Controller');
/**
 * TraineePhones Controller
 *
 * @property TraineePhone $TraineePhone
 * @property PaginatorComponent $Paginator
 */
class TraineePhonesController extends AppController {

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
		$this->TraineePhone->recursive = 0;
		$this->set('traineePhones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineePhone->exists($id)) {
			throw new NotFoundException(__('Invalid trainee phone'));
		}
		$options = array('conditions' => array('TraineePhone.' . $this->TraineePhone->primaryKey => $id));
		$this->set('traineePhone', $this->TraineePhone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineePhone->create();
			if ($this->TraineePhone->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee phone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee phone could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineePhone->Trainee->find('list');
		$this->set(compact('trainees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraineePhone->exists($id)) {
			throw new NotFoundException(__('Invalid trainee phone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineePhone->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee phone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee phone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineePhone.' . $this->TraineePhone->primaryKey => $id));
			$this->request->data = $this->TraineePhone->find('first', $options);
		}
		$trainees = $this->TraineePhone->Trainee->find('list');
		$this->set(compact('trainees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineePhone->id = $id;
		if (!$this->TraineePhone->exists()) {
			throw new NotFoundException(__('Invalid trainee phone'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineePhone->delete()) {
			$this->Session->setFlash(__('The trainee phone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee phone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
