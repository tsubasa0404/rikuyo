<?php
App::uses('AppController', 'Controller');
/**
 * StatusLists Controller
 *
 * @property StatusList $StatusList
 * @property PaginatorComponent $Paginator
 */
class StatusListsController extends AppController {

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
		$this->StatusList->recursive = 0;
		$this->set('statusLists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusList->exists($id)) {
			throw new NotFoundException(__('Invalid status list'));
		}
		$options = array('conditions' => array('StatusList.' . $this->StatusList->primaryKey => $id));
		$this->set('statusList', $this->StatusList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusList->create();
			if ($this->StatusList->save($this->request->data)) {
				$this->Session->setFlash(__('The status list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status list could not be saved. Please, try again.'));
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
		if (!$this->StatusList->exists($id)) {
			throw new NotFoundException(__('Invalid status list'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusList->save($this->request->data)) {
				$this->Session->setFlash(__('The status list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StatusList.' . $this->StatusList->primaryKey => $id));
			$this->request->data = $this->StatusList->find('first', $options);
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
		$this->StatusList->id = $id;
		if (!$this->StatusList->exists()) {
			throw new NotFoundException(__('Invalid status list'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StatusList->delete()) {
			$this->Session->setFlash(__('The status list has been deleted.'));
		} else {
			$this->Session->setFlash(__('The status list could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
