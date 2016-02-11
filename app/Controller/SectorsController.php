<?php
App::uses('AppController', 'Controller');
/**
 * Sectors Controller
 *
 * @property Sector $Sector
 * @property PaginatorComponent $Paginator
 */
class SectorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Auth', 'RequestHandler');
	public $uses = array(
		'Sector',
		'Job',
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sector->recursive = 0;
		$jobs = $this->Job->validJobs();
		$sectors = $this->Sector->validSectors();
		$this->set(compact('sectors','jobs'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Invalid sector'));
		}
		$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
		$this->set('sector', $this->Sector->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sector->create();
			if ($this->Sector->save($this->request->data)) {
				$this->Session->setFlash(__('The sector has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The sector could not be saved. Please, try again.'));
			}
		}
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['Sector']['id'] = $_POST['id'];
	    $this->request->data['Sector']['sector_jp'] = $_POST['sector_jp'];
	    $this->request->data['Sector']['sector_en'] = $_POST['sector_en'];
	    $this->Sector->create();
	    if ($this->Sector->save($this->request->data)) {
	      echo json_encode($this->Sector->getLastInsertID());
	    } else {
	    }
	  }
	}

	public function update_delete_flag($id = null){
		if(!$this->Sector->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Sector->save($this->request->data)){
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'));
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
		if (!$this->Sector->exists($id)) {
			throw new NotFoundException(__('Invalid sector'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sector->save($this->request->data)) {
				$this->Session->setFlash(__('The sector has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sector could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sector.' . $this->Sector->primaryKey => $id));
			$this->request->data = $this->Sector->find('first', $options);
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
		$this->Sector->id = $id;
		if (!$this->Sector->exists()) {
			throw new NotFoundException(__('Invalid sector'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sector->delete()) {
			$this->Session->setFlash(__('The sector has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sector could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
