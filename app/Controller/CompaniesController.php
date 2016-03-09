<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompaniesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array(
		'Association',
		'Company',
		'Job'
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$lang = $this->__setLang();
		$this->set(compact('lang'));
		$companies = $this->Company->companyList();
		$this->set(compact('companies'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {


		if ($this->request->is('post')) {
			if($this->request->data['Company']['job']){
				$job_array = implode(',', $this->request->data['Company']['job']);
				$this->request->data['Company']['job'] = $job_array;
			}

			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'),'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'),'error_flash');
			}
		}

		//言語切り替え変数$lang取得
		$lang = $this->__setLang();

		//組合リスト(言語切り替え機能済み)取得
		$option_associations = $this->Association->optionAssociations($lang);
		//職種(言語切り替え機能済み)取得
		$option_jobs = $this->Job->optionJobs($lang);

		$associations = $this->Company->Association->find('list');
		$this->set(compact('associations','option_associations', 'option_jobs', 'lang'));
	}

	public function profile($id = null) {
		$lang = $this->__setLang();
		$option_associations = $this->Association->optionAssociations($lang);
		$option_jobs = $this->Job->optionJobs($lang);
		$this->set(compact('option_associations', 'option_jobs', 'lang'));

		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid Company'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The Company has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The Company could not be saved. Please, try again.'));
			}
		} else {
			$lang = $this->__setLang();
			$option_jobs = $this->Job->optionJobs($lang);
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);


			$this->set(compact('option_jos'));
		}
	}

	public function update() {

		if ($this->request->is('post')) {
			if($this->request->data['Company']['job']){
				$job_array = implode(',', $this->request->data['Company']['job']);
				$this->request->data['Company']['job'] = $job_array;
			}
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been changed.'),'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'),'error_flash');
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
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		$associations = $this->Company->Association->find('list');
		$this->set(compact('associations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('The company has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The company could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function update_delete_flag($id = null){
		if(!$this->Company->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Company->save($this->request->data)){
				$this->Session->setFlash(__('The company has been deleted.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'), 'error_flash');
			}
		}
	}

}
