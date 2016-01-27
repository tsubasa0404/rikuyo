<?php
App::uses('AppController', 'Controller');
/**
 * TraineeMicrofinanceRecords Controller
 *
 * @property TraineeMicrofinanceRecord $TraineeMicrofinanceRecord
 * @property PaginatorComponent $Paginator
 */
class TraineeMicrofinanceRecordsController extends AppController {

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
		$this->TraineeMicrofinanceRecord->recursive = 0;
		$this->set('traineeMicrofinanceRecords', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeMicrofinanceRecord->exists($id)) {
			throw new NotFoundException(__('Invalid trainee microfinance record'));
		}
		$options = array('conditions' => array('TraineeMicrofinanceRecord.' . $this->TraineeMicrofinanceRecord->primaryKey => $id));
		$this->set('traineeMicrofinanceRecord', $this->TraineeMicrofinanceRecord->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeMicrofinanceRecord->create();
			if ($this->TraineeMicrofinanceRecord->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance record has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee microfinance record could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeMicrofinanceRecord->Trainee->find('list');
		$statuses = $this->TraineeMicrofinanceRecord->Status->find('list');
		$this->set(compact('trainees', 'statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraineeMicrofinanceRecord->exists($id)) {
			throw new NotFoundException(__('Invalid trainee microfinance record'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeMicrofinanceRecord->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance record has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee microfinance record could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeMicrofinanceRecord.' . $this->TraineeMicrofinanceRecord->primaryKey => $id));
			$this->request->data = $this->TraineeMicrofinanceRecord->find('first', $options);
		}
		$trainees = $this->TraineeMicrofinanceRecord->Trainee->find('list');
		$statuses = $this->TraineeMicrofinanceRecord->Status->find('list');
		$this->set(compact('trainees', 'statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineeMicrofinanceRecord->id = $id;
		if (!$this->TraineeMicrofinanceRecord->exists()) {
			throw new NotFoundException(__('Invalid trainee microfinance record'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeMicrofinanceRecord->delete()) {
			$this->Session->setFlash(__('The trainee microfinance record has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee microfinance record could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
