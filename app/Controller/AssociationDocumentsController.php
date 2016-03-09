<?php
App::uses('AppController', 'Controller');
/**
 * AssociationDocuments Controller
 *
 * @property AssociationDocument $AssociationDocument
 * @property PaginatorComponent $Paginator
 */
class AssociationDocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssociationDocument->recursive = 0;
		$this->set('associationDocuments', $this->Paginator->paginate());
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssociationDocument->exists($id)) {
			throw new NotFoundException(__('Invalid association document'));
		}
		$options = array('conditions' => array('AssociationDocument.' . $this->AssociationDocument->primaryKey => $id));
		$this->set('associationDocument', $this->AssociationDocument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssociationDocument->create();
			if ($this->AssociationDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The association document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The association document could not be saved. Please, try again.'));
			}
		}
		$associations = $this->AssociationDocument->Association->find('list');
		$docNames = $this->AssociationDocument->DocName->find('list');
		$this->set(compact('associations', 'docNames'));
	}

	public function addAjax(){
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
		$this->autoRender = false;

			$this->AssociationDocument->create();
			if ($this->AssociationDocument->save($this->request->data)) {
				echo json_encode($this->AssociationDocument->getLastInsertID());

				// return $this->Session->setFlash('The time card has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The Candidate could not be saved. Please, try again.', 'flash_failure');
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
		if (!$this->AssociationDocument->exists($id)) {
			throw new NotFoundException(__('Invalid association document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssociationDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The association document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The association document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssociationDocument.' . $this->AssociationDocument->primaryKey => $id));
			$this->request->data = $this->AssociationDocument->find('first', $options);
		}
		$associations = $this->AssociationDocument->Association->find('list');
		$docNames = $this->AssociationDocument->DocName->find('list');
		$this->set(compact('associations', 'docNames'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete() {
		$id = $this->request->data['AssociationDocument']['id'];
		$this->AssociationDocument->id = $id;
		if (!$this->AssociationDocument->exists()) {
			throw new NotFoundException(__('Invalid association document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AssociationDocument->delete()) {
			$this->Session->setFlash(__('The association document has been removed.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The association document could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}

	public function deleteAjax() {
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
		 }
		if($this->request->is('ajax')){
		$this->autoRender = false;

		$id = $this->request->data['AssociationDocument']['id'];
		$this->AssociationDocument->id = $id;
	}
		if (!$this->AssociationDocument->exists()) {
			throw new NotFoundException(__('Invalid association document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AssociationDocument->delete()) {
			$this->Session->setFlash(__('The association document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The association document could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
