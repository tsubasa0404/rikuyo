<?php
App::uses('AppController', 'Controller');
/**
 * DocFolders Controller
 *
 * @property DocFolder $DocFolder
 * @property PaginatorComponent $Paginator
 */
class DocFoldersController extends AppController {

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
		$this->DocFolder->recursive = 0;
		$this->set('docFolders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocFolder->exists($id)) {
			throw new NotFoundException(__('Invalid doc folder'));
		}
		$options = array('conditions' => array('DocFolder.' . $this->DocFolder->primaryKey => $id));
		$this->set('docFolder', $this->DocFolder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocFolder->create();
			if ($this->DocFolder->save($this->request->data)) {
				$this->Session->setFlash(__('The doc folder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc folder could not be saved. Please, try again.'));
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
		if (!$this->DocFolder->exists($id)) {
			throw new NotFoundException(__('Invalid doc folder'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocFolder->save($this->request->data)) {
				$this->Session->setFlash(__('The doc folder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc folder could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocFolder.' . $this->DocFolder->primaryKey => $id));
			$this->request->data = $this->DocFolder->find('first', $options);
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
		$this->DocFolder->id = $id;
		if (!$this->DocFolder->exists()) {
			throw new NotFoundException(__('Invalid doc folder'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DocFolder->delete()) {
			$this->Session->setFlash(__('The doc folder has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doc folder could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
