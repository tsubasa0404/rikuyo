<?php
App::uses('AppController', 'Controller');
/**
 * Associations Controller
 *
 * @property Association $Association
 * @property PaginatorComponent $Paginator
 */
class AssociationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array(
		'Association',
		'Sector'
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$associations = $this->Association->validAssociations();
		$this->set(compact('associations'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Association->exists($id)) {
			throw new NotFoundException(__('Invalid association'));
		}
		$options = array('conditions' => array('Association.' . $this->Association->primaryKey => $id));
		$this->set('association', $this->Association->find('first', $options));
	}



/**
 * add method
 *
 * @return void
 */
	public function add() {
		$lang = $this->__setLang();
		$option_sectors = $this->Sector->optionSectors($lang);
		$this->set(compact('option_sectors'));

		if ($this->request->is('post')) {
			$this->Association->create();
			if ($this->Association->save($this->request->data)) {
				$this->Session->setFlash(__('The association has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The association could not be saved. Please, try again.'));
			}
		}
	}

/**
 * [profile description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
	public function profile($id = null) {
		if (!$this->Association->exists($id)) {
			throw new NotFoundException(__('Invalid association'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Association->save($this->request->data)) {
				$this->Session->setFlash(__('The association has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The association could not be saved. Please, try again.'));
			}
		} else {
			$lang = $this->__setLang();
			$option_sectors = $this->Sector->optionSectors($lang);
			$options = array('conditions' => array('Association.' . $this->Association->primaryKey => $id));
			$this->request->data = $this->Association->find('first', $options);
			$this->set(compact('option_sectors'));
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
		if (!$this->Association->exists($id)) {
			throw new NotFoundException(__('Invalid association'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Association->save($this->request->data)) {
				$this->Session->setFlash(__('The association has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The association could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Association.' . $this->Association->primaryKey => $id));
			$this->request->data = $this->Association->find('first', $options);
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
		$this->Association->id = $id;
		if (!$this->Association->exists()) {
			throw new NotFoundException(__('Invalid association'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Association->delete()) {
			$this->Session->setFlash(__('The association has been deleted.'));
		} else {
			$this->Session->setFlash(__('The association could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
