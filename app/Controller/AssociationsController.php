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
		'AssociationDocument',
		'AssociationExpense',
		'Company',
		'Sector',
		'DocFolder',
		'DocName'
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Association->recursive = -1;
		$lang = $this->__setLang();

		$associations = $this->Association->validAssociations();

		$this->set(compact('associations', 'lang'));
	}

	public function _getSectorName(){

	}


	public function select($id = null) {
		if (!$this->Association->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Association->save($this->request->data)) {
				$this->Session->setFlash(__('The Association has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The Association could not be saved. Please, try again.'));
			}
		} else {
			$this->Association->recursive = -1;

			$lang = $this->__setLang();

			//folderと書類一覧取得
			$folders = $this->DocFolder->folders();
			$documents = $this->DocName->documents();
			$selected_association_documents = $this->AssociationDocument->selected_association_documents($id);
			$this->set(compact('lang', 'folders', 'documents', 'selected_association_documents'));

			$options = array('conditions' => array('Association.' . $this->Association->primaryKey => $id));
			$this->request->data = $this->Association->find('first', $options);
		}

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
			$sector_array = implode(',', $this->request->data['Association']['sector']);
			$this->request->data['Association']['sector'] = $sector_array;

			$this->Association->validates();
			$this->Association->create();

			if ($this->Association->save($this->request->data)) {
				$this->Session->setFlash(__('The association has been saved.'), 'success_flash', "");
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The association could not be saved. Please, try again.'), 'error_flash', "");
			}
		}
	}

	public function sectorAdd() {
		if ($this->request->is('post')) {
			if($this->request->data['Association']['sector']){
				$sector_array = implode(',', $this->request->data['Association']['sector']);
				$this->request->data['Association']['sector'] = $sector_array;
			}
			$this->Association->create();

			if ($this->Association->save($this->request->data)) {
				$this->Session->setFlash(__('The association has been changed.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The association could not be saved. Please, try again.'), 'error_flash');
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
				$this->Session->setFlash(__('The association has been changed.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The association could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$this->Association->recursive = -1;
			$this->Company->recursive = -1;

			$lang = $this->__setLang();
			$option_sectors = $this->Sector->optionSectors($lang);
			$options = array('conditions' => array('Association.' . $this->Association->primaryKey => $id));

			//組合に所属している会社取得
			$companies = $this->Company->associatedCompanies($id);
			$this->request->data = $this->Association->find('first', $options);

			//提出書類一覧取得
			$folders = $this->AssociationDocument->selectedFolders($id);
			$documents = $this->AssociationDocument->selectedDocuments($id);

			//管理費一覧取得
			$expenses = $this->AssociationExpense->expenses($id);

			$this->set(compact('option_sectors', 'companies', 'option_sectors', 'lang', 'documents', 'folders', 'expenses'));
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
			$this->Session->setFlash(__('The association has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The association could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function update_delete_flag($id = null){
		if(!$this->Association->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Association->save($this->request->data)){
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'));
			}
		}
	}
}
