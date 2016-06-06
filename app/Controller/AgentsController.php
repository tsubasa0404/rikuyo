<?php
App::uses('AppController', 'Controller');
/**
 * Agents Controller
 *
 * @property Agent $Agent
 * @property PaginatorComponent $Paginator
 */
class AgentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array(
		'Agent',
		'Sector',
		'Province',
		'District',
		'Commune'
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {

		$lang = $this->__setLang();
		$agents = $this->Agent->validAgents();
		$this->set(compact('agents', 'lang'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
		$this->set('agent', $this->Agent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$lang = $this->__setLang();
		$option_sectors = $this->Sector->optionSectors($lang);

		$provinces = $this->Province->find('list', array('fields' => array('id', 'province_en')));
		$districts = $this->District->formatPlacesToJsonForAddCommune('district');
		$communes = $this->Commune->formatPlacesToJson('commune');

		$this->set('_serialize', 'districts');
		$this->set('_serialize', 'communes');
		$this->set(compact('option_sectors','districts', 'communes', 'lang', 'provinces'));

		if ($this->request->is('post')) {
			if($this->request->data['Agent']['sector']){
				$sector_array = implode(',', $this->request->data['Agent']['sector']);
				$this->request->data['Agent']['sector'] = $sector_array;
			}
			$this->Agent->create();

			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

	public function update() {

		if ($this->request->is('post')) {
			if( $this->request->data['Agent']['sector']){
				$sector_array = implode(',', $this->request->data['Agent']['sector']);
				$this->request->data['Agent']['sector'] = $sector_array;
			}


			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been changed.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

/**
 * [profile description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
	public function profile($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid Agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The Agent has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The Agent could not be saved. Please, try again.'));
			}
		} else {
			$this->Province->recursive = -1;
			$this->District->recursive = -1;
			$this->Commune->recursive = -1;

			$lang = $this->__setLang();
			$option_sectors = $this->Sector->optionSectors($lang);
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$option_provinces = $this->Province->optionProvince();
      $option_districts = $this->District->optionDistrict();
      $option_communes  = $this->Commune->optionCommune();
			$this->request->data = $this->Agent->find('first', $options);
			$this->set(compact('option_sectors', 'option_provinces', 'option_districts', 'option_communes', 'lang'));

			//Select2用住所リスト
			$districts = $this->Commune->formatPlacesToJson('district');
			$communes = $this->Commune->formatPlacesToJson('commune');
			$this->set('_serialize', 'districts');
			$this->set('_serialize', 'communes');
			$this->set(compact('districts', 'communes'));
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
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
		}
		$provinces = $this->Agent->Province->find('list');
		$districts = $this->Agent->District->find('list');
		$communes = $this->Agent->Commune->find('list');
		$this->set(compact('provinces', 'districts', 'communes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agent->id = $id;
		if (!$this->Agent->exists()) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Agent->delete()) {
			$this->Session->setFlash(__('The agent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

		public function update_delete_flag($id = null){
		if(!$this->Agent->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Agent->save($this->request->data)){
				$this->Session->setFlash(__('The agent has been deleted.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'), 'error_flash');
			}
		}
	}

}
