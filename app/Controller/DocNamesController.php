<?php
App::uses('AppController', 'Controller');
/**
 * DocNames Controller
 *
 * @property DocName $DocName
 * @property PaginatorComponent $Paginator
 */
class DocNamesController extends AppController {

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
		$this->DocName->recursive = 0;
		$this->set('docNames', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocName->exists($id)) {
			throw new NotFoundException(__('Invalid doc name'));
		}
		$options = array('conditions' => array('DocName.' . $this->DocName->primaryKey => $id));
		$this->set('docName', $this->DocName->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocName->create();
			if ($this->DocName->save($this->request->data)) {
				$this->Session->setFlash(__('The doc name has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc name could not be saved. Please, try again.'));
			}
		}
		$folders = $this->DocName->Folder->find('list');
		$subFolders = $this->DocName->SubFolder->find('list');
		$this->set(compact('folders', 'subFolders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocName->exists($id)) {
			throw new NotFoundException(__('Invalid doc name'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocName->save($this->request->data)) {
				$this->Session->setFlash(__('The doc name has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc name could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocName.' . $this->DocName->primaryKey => $id));
			$this->request->data = $this->DocName->find('first', $options);
		}
		$folders = $this->DocName->Folder->find('list');
		$subFolders = $this->DocName->SubFolder->find('list');
		$this->set(compact('folders', 'subFolders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocName->id = $id;
		if (!$this->DocName->exists()) {
			throw new NotFoundException(__('Invalid doc name'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DocName->delete()) {
			$this->Session->setFlash(__('The doc name has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doc name could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
