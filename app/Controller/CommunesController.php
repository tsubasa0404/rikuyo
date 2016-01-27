<?php
App::uses('AppController', 'Controller');
/**
 * Communes Controller
 *
 * @property Commune $Commune
 * @property PaginatorComponent $Paginator
 */
class CommunesController extends AppController {

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
		$this->Commune->recursive = 0;
		$this->set('communes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Commune->exists($id)) {
			throw new NotFoundException(__('Invalid commune'));
		}
		$options = array('conditions' => array('Commune.' . $this->Commune->primaryKey => $id));
		$this->set('commune', $this->Commune->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commune->create();
			if ($this->Commune->save($this->request->data)) {
				$this->Session->setFlash(__('The commune has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commune could not be saved. Please, try again.'));
			}
		}
		$districts = $this->Commune->District->find('list');
		$this->set(compact('districts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Commune->exists($id)) {
			throw new NotFoundException(__('Invalid commune'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Commune->save($this->request->data)) {
				$this->Session->setFlash(__('The commune has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commune could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Commune.' . $this->Commune->primaryKey => $id));
			$this->request->data = $this->Commune->find('first', $options);
		}
		$districts = $this->Commune->District->find('list');
		$this->set(compact('districts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Commune->id = $id;
		if (!$this->Commune->exists()) {
			throw new NotFoundException(__('Invalid commune'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Commune->delete()) {
			$this->Session->setFlash(__('The commune has been deleted.'));
		} else {
			$this->Session->setFlash(__('The commune could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
