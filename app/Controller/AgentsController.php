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
		'Sector'
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$agents = $this->Agent->validAgents();
		$this->set(compact('agents'));
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
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'));
			}
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
		$this->set(compact('option_sectors'));

		if ($this->request->is('post')) {
			$this->Agent->create();
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		}
		$provinces = $this->Agent->Province->find('list');
		$districts = $this->Agent->District->find('list');
		$communes = $this->Agent->Commune->find('list');
		$this->set(compact('provinces', 'districts', 'communes'));
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
			$lang = $this->__setLang();
			$option_sectors = $this->Sector->optionSectors($lang);
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
			$this->set(compact('option_sectors'));
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
}
