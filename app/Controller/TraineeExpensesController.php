<?php
App::uses('AppController', 'Controller');
/**
 * TraineeExpenses Controller
 *
 * @property TraineeExpense $TraineeExpense
 * @property PaginatorComponent $Paginator
 */
class TraineeExpensesController extends AppController {

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
		$this->TraineeExpense->recursive = 0;
		$this->set('traineeExpenses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeExpense->exists($id)) {
			throw new NotFoundException(__('Invalid trainee expense'));
		}
		$options = array('conditions' => array('TraineeExpense.' . $this->TraineeExpense->primaryKey => $id));
		$this->set('traineeExpense', $this->TraineeExpense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeExpense->create();
			if ($this->TraineeExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee expense has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee expense could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeExpense->Trainee->find('list');
		$this->set(compact('trainees'));
	}

	public function update($trainee_id=null) {
		if ($this->request->is('post')) {
			if ($this->TraineeExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee expense has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee expense could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeExpense->Trainee->find('list');
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
		if (!$this->TraineeExpense->exists($id)) {
			throw new NotFoundException(__('Invalid trainee expense'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee expense has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee expense could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeExpense.' . $this->TraineeExpense->primaryKey => $id));
			$this->request->data = $this->TraineeExpense->find('first', $options);
		}
		$trainees = $this->TraineeExpense->Trainee->find('list');
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
		$this->TraineeExpense->id = $id;
		if (!$this->TraineeExpense->exists()) {
			throw new NotFoundException(__('Invalid trainee expense'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeExpense->delete()) {
			$this->Session->setFlash(__('The trainee expense has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee expense could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
