<?php
App::uses('AppController', 'Controller');
/**
 * DocNames Controller
 *
 * @property DocName $DocName
 * @property PaginatorComponent $Paginator
 */
class DocNamesController extends AppController {
	public $uses = array(
		'DocName',
		'DocFolder',
		'DocTemplate',
		'SubFolder'
		);
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
		$lang = $this->__setLang();
		$option_folders = $this->DocFolder->optionFolders($lang);
		$option_sub_folders = $this->SubFolder->optionSubFolders();
		$option_documents = $this->DocName->optionDocuments();
		$folders = $this->DocFolder->folders();
		$subfolders = $this->SubFolder->subfolders();
		$this->set(compact('option_folders', 'option_sub_folders', 'option_documents', 'folders', 'subfolders'));

	}

	public function getDocOptionAjax(){
		$this->autoRender = false;
		if($this->RequestHandler->isAjax()){
    Configure::write('debug', 0);

      $folder_id     = $_GET['folder_id'];
      $sub_folder_id = $_GET['sub_folder_id'];

			$doc_options = $this->DocName->getDocOptionAjax($folder_id, $sub_folder_id);

			echo json_encode($doc_options, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
		}
	}

	//組合提出書類選択ページ
	public function select() {
		$lang = $this->__setLang();
		$options = array('conditions' => array('DocName.' . $this->DocName->primaryKey => $id));
		$this->set('docName', $this->DocName->find('first', $options));
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
		//$folders = $this->DocName->Folder->find('list');
		//$subFolders = $this->DocName->SubFolder->find('list');
		//$this->set(compact('folders', 'subFolders'));
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

	public function update_delete_flag($id = null){
		if(!$this->DocName->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->DocName->save($this->request->data)){
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'));
			}
		}
	}
}
