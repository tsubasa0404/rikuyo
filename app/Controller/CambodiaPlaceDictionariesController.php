<?php
App::uses('AppController', 'Controller');
/**
 * CambodiaPlaceDictionaries Controller
 *
 * @property CambodiaPlaceDictionary $CambodiaPlaceDictionary
 * @property PaginatorComponent $Paginator
 */
class CambodiaPlaceDictionariesController extends AppController {

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
		$this->CambodiaPlaceDictionary->recursive = 0;
		$this->set('cambodiaPlaceDictionaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CambodiaPlaceDictionary->exists($id)) {
			throw new NotFoundException(__('Invalid cambodia place dictionary'));
		}
		$options = array('conditions' => array('CambodiaPlaceDictionary.' . $this->CambodiaPlaceDictionary->primaryKey => $id));
		$this->set('cambodiaPlaceDictionary', $this->CambodiaPlaceDictionary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CambodiaPlaceDictionary->create();
			if ($this->CambodiaPlaceDictionary->save($this->request->data)) {
				$this->Session->setFlash(__('The cambodia place dictionary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cambodia place dictionary could not be saved. Please, try again.'));
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
		if (!$this->CambodiaPlaceDictionary->exists($id)) {
			throw new NotFoundException(__('Invalid cambodia place dictionary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CambodiaPlaceDictionary->save($this->request->data)) {
				$this->Session->setFlash(__('The cambodia place dictionary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cambodia place dictionary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CambodiaPlaceDictionary.' . $this->CambodiaPlaceDictionary->primaryKey => $id));
			$this->request->data = $this->CambodiaPlaceDictionary->find('first', $options);
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
		$this->CambodiaPlaceDictionary->id = $id;
		if (!$this->CambodiaPlaceDictionary->exists()) {
			throw new NotFoundException(__('Invalid cambodia place dictionary'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CambodiaPlaceDictionary->delete()) {
			$this->Session->setFlash(__('The cambodia place dictionary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cambodia place dictionary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
