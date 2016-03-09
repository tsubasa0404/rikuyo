<?php
App::uses('AppController', 'Controller');
/**
 * Inspections Controller
 *
 * @property Inspection $Inspection
 * @property PaginatorComponent $Paginator
 */
class InspectionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array(
		'Inspection',
		'Company',
		'Association'
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->Inspection->recursive = 0;
		$inspections = $this->Inspection->find('all', array(
			'order' => array('inspection_from' => 'asc')));
		$this->set(compact('inspections'));

		//言語切り替え変数$lang取得
		$lang = $this->__setLang();

		//組合リスト(言語切り替え機能済み)取得
		$option_associations = $this->Association->optionAssociations($lang);
		//企業リスト(言語切り替えおよびKeyに組合名を追加)
		$option_companies = $this->Company->__optionComAso($lang);


		$this->set(compact('lang', 'option_associations', 'option_companies'));
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inspection->exists($id)) {
			throw new NotFoundException(__('Invalid inspection'));
		}
		$options = array('conditions' => array('Inspection.' . $this->Inspection->primaryKey => $id));
		$this->set('inspection', $this->Inspection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$this->Inspection->create();
			if ($this->Inspection->save($this->request->data)) {
				$this->Session->setFlash(__('The inspection has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'inspections', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inspection could not be saved. Please, try again.'), 'error_flash');
			}
		}
		//言語切り替え変数$lang取得
		$lang = $this->__setLang();

		//組合リスト(言語切り替え機能済み)取得
		$option_associations = $this->Association->optionAssociations($lang);
		//企業リスト(言語切り替えおよびKeyに組合名を追加)
		$option_companies = $this->Company->__optionComAso($lang);


		$this->set(compact( 'option_associations', 'option_companies'));
	}

	public function profile($id) {
		if ($this->request->is('post')) {

			$this->Inspection->create();
			if ($this->Inspection->save($this->request->data)) {
				$this->Session->setFlash(__('The inspection has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'inspections', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inspection could not be saved. Please, try again.'), 'error_flash');
			}
		}

		$options = array('conditions' => array('Inspection.' . $this->Inspection->primaryKey => $id));
			$this->request->data = $this->Inspection->find('first', $options);
		//言語切り替え変数$lang取得
		$lang = $this->__setLang();

		//組合リスト(言語切り替え機能済み)取得
		$option_associations = $this->Association->optionAssociations($lang);
		//企業リスト(言語切り替えおよびKeyに組合名を追加)
		$option_companies = $this->Company->__optionComAso($lang);


		$this->set(compact( 'option_associations', 'option_companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Inspection->exists($id)) {
			throw new NotFoundException(__('Invalid inspection'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inspection->save($this->request->data)) {
				$this->Session->setFlash(__('The inspection has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inspection could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('Inspection.' . $this->Inspection->primaryKey => $id));
			$this->request->data = $this->Inspection->find('first', $options);
		}
		$associations = $this->Inspection->Association->find('list');
		$companies = $this->Inspection->Company->find('list');
		$this->set(compact('associations', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Inspection->id = $id;
		if (!$this->Inspection->exists()) {
			throw new NotFoundException(__('Invalid inspection'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inspection->delete()) {
			$this->Session->setFlash(__('The inspection has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The inspection could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect($this->referer());
	}
}
