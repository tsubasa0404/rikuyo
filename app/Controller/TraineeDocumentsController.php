<?php
App::uses('AppController', 'Controller');
/**
 * TraineeDocuments Controller
 *
 * @property TraineeDocument $TraineeDocument
 * @property PaginatorComponent $Paginator
 */
class TraineeDocumentsController extends AppController {

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
		$this->TraineeDocument->recursive = 0;
		$this->set('traineeDocuments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeDocument->exists($id)) {
			throw new NotFoundException(__('Invalid trainee document'));
		}
		$options = array('conditions' => array('TraineeDocument.' . $this->TraineeDocument->primaryKey => $id));
		$this->set('traineeDocument', $this->TraineeDocument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeDocument->create();
			if ($this->TraineeDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee document could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeDocument->Trainee->find('list');
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
		if (!$this->TraineeDocument->exists($id)) {
			throw new NotFoundException(__('Invalid trainee document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeDocument.' . $this->TraineeDocument->primaryKey => $id));
			$this->request->data = $this->TraineeDocument->find('first', $options);
		}
		$trainees = $this->TraineeDocument->Trainee->find('list');
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
		$this->TraineeDocument->id = $id;
		if (!$this->TraineeDocument->exists()) {
			throw new NotFoundException(__('Invalid trainee document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeDocument->delete()) {
			$this->Session->setFlash(__('The trainee document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
