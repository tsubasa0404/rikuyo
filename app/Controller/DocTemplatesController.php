<?php
App::uses('AppController', 'Controller');
/**
 * DocTemplates Controller
 *
 * @property DocTemplate $DocTemplate
 * @property PaginatorComponent $Paginator
 */
class DocTemplatesController extends AppController {

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
		$this->DocTemplate->recursive = 0;
		$this->set('docTemplates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid doc template'));
		}
		$options = array('conditions' => array('DocTemplate.' . $this->DocTemplate->primaryKey => $id));
		$this->set('docTemplate', $this->DocTemplate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$doc_name = $this->request->data['DocTemplate']['document_name_id'];
			$folder_id = $this->request->data['DocTemplate']['folder_id'];
			$sub_folder_id = $this->request->data['DocTemplate']['sub_folder_id'];
			$doc_lang = $this->request->data['DocTemplate']['lang'];
			$org_img_file_name = $this->request->data['DocTemplate']['img']['name'];

			$ext = pathinfo($org_img_file_name, PATHINFO_EXTENSION);//ファイル名の拡張子を取得
			$new_img_file_name = $folder_id . "_".$sub_folder_id."_".$doc_name . "_" . $doc_lang .".". $ext;
			$this->request->data['DocTemplate']['img']['name'] = $new_img_file_name;

			$this->DocTemplate->create();
			if ($this->DocTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('The doc template has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The doc template could not be saved. Please, try again.'), 'error_flash');
			}
		}
		$documentNames = $this->DocTemplate->DocumentName->find('list');
		$this->set(compact('documentNames'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid doc template'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('The doc template has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doc template could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('DocTemplate.' . $this->DocTemplate->primaryKey => $id));
			$this->request->data = $this->DocTemplate->find('first', $options);
		}
		$documentNames = $this->DocTemplate->DocumentName->find('list');
		$this->set(compact('documentNames'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocTemplate->id = $id;
		if (!$this->DocTemplate->exists()) {
			throw new NotFoundException(__('Invalid doc template'), 'error_flash');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DocTemplate->delete()) {
			$this->Session->setFlash(__('The doc template has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The doc template could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
