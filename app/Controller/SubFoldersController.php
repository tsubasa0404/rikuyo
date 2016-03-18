<?php
App::uses('AppController', 'Controller');
/**
 * SubFolders Controller
 *
 * @property SubFolder $SubFolder
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SubFoldersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubFolder->recursive = 0;
		$this->set('subFolders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubFolder->exists($id)) {
			throw new NotFoundException(__('Invalid sub folder'));
		}
		$options = array('conditions' => array('SubFolder.' . $this->SubFolder->primaryKey => $id));
		$this->set('subFolder', $this->SubFolder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubFolder->create();
			if ($this->SubFolder->save($this->request->data)) {
				$this->Session->setFlash(__('The sub folder has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The sub folder could not be saved. Please, try again.'), 'error_flash');
			}
		}
		$docFolders = $this->SubFolder->DocFolder->find('list');
		$this->set(compact('docFolders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubFolder->exists($id)) {
			throw new NotFoundException(__('Invalid sub folder'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubFolder->save($this->request->data)) {
				$this->Session->setFlash(__('The sub folder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub folder could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubFolder.' . $this->SubFolder->primaryKey => $id));
			$this->request->data = $this->SubFolder->find('first', $options);
		}
		$docFolders = $this->SubFolder->DocFolder->find('list');
		$this->set(compact('docFolders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubFolder->id = $id;
		if (!$this->SubFolder->exists()) {
			throw new NotFoundException(__('Invalid sub folder'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubFolder->delete()) {
			$this->Session->setFlash(__('The sub folder has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sub folder could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
