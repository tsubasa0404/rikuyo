<?php
App::uses('AppController', 'Controller');
/**
 * Inspections Controller
 *
 * @property Inspection $Inspection
 * @property PaginatorComponent $Paginator
 */
class InspectionsController extends AppController {

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
		$this->Inspection->recursive = 0;
		$this->set('inspections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inspection->exists($id)) {
			throw new NotFoundException(__('Invalid inspection'));
		}
		$options = array('conditions' => array('Inspection.' . $this->Inspection->primaryKey => $id));
		$this->set('inspection', $this->Inspection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inspection->create();
			if ($this->Inspection->save($this->request->data)) {
				$this->Session->setFlash(__('The inspection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inspection could not be saved. Please, try again.'));
			}
		}
		$associations = $this->Inspection->Association->find('list');
		$companies = $this->Inspection->Company->find('list');
		$this->set(compact('associations', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Inspection->exists($id)) {
			throw new NotFoundException(__('Invalid inspection'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inspection->save($this->request->data)) {
				$this->Session->setFlash(__('The inspection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inspection could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inspection.' . $this->Inspection->primaryKey => $id));
			$this->request->data = $this->Inspection->find('first', $options);
		}
		$associations = $this->Inspection->Association->find('list');
		$companies = $this->Inspection->Company->find('list');
		$this->set(compact('associations', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Inspection->id = $id;
		if (!$this->Inspection->exists()) {
			throw new NotFoundException(__('Invalid inspection'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inspection->delete()) {
			$this->Session->setFlash(__('The inspection has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inspection could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
