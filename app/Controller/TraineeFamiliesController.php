<?php
App::uses('AppController', 'Controller');
/**
 * TraineeFamilies Controller
 *
 * @property TraineeFamily $TraineeFamily
 * @property PaginatorComponent $Paginator
 */
class TraineeFamiliesController extends AppController {

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
		$this->TraineeFamily->recursive = 0;
		$this->set('traineeFamilies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeFamily->exists($id)) {
			throw new NotFoundException(__('Invalid trainee family'));
		}
		$options = array('conditions' => array('TraineeFamily.' . $this->TraineeFamily->primaryKey => $id));
		$this->set('traineeFamily', $this->TraineeFamily->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeFamily->create();
			if ($this->TraineeFamily->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee family has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee family could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeFamily->Trainee->find('list');
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
		if (!$this->TraineeFamily->exists($id)) {
			throw new NotFoundException(__('Invalid trainee family'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeFamily->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee family has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee family could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeFamily.' . $this->TraineeFamily->primaryKey => $id));
			$this->request->data = $this->TraineeFamily->find('first', $options);
		}
		$trainees = $this->TraineeFamily->Trainee->find('list');
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
		$this->TraineeFamily->id = $id;
		if (!$this->TraineeFamily->exists()) {
			throw new NotFoundException(__('Invalid trainee family'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeFamily->delete()) {
			$this->Session->setFlash(__('The trainee family has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee family could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
