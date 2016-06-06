<?php
App::uses('AppController', 'Controller');
/**
 * Provinces Controller
 *
 * @property Province $Province
 * @property PaginatorComponent $Paginator
 */
class ProvincesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	public $uses = array('Province', 'CambodiaPlaceDictionary');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Province->recursive = 0;
		$this->CambodiaPlaceDictionary->recursive = -1;
		$address = $this->CambodiaPlaceDictionary->find('all', array('order' =>array('place_en' => 'asc')));
		$provinces = $this->Province->find('all', array('order' => array('province_en' => 'asc')));
		$this->set(compact('address','provinces'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
		$this->set('province', $this->Province->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Province->create();
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['Province']['id'] = $_POST['id'];
	    $this->request->data['Province']['province_jp'] = $_POST['province_jp'];
	    $this->request->data['Province']['province_en'] = $_POST['province_en'];
	    $this->request->data['Province']['province_kh'] = $_POST['province_kh'];
	    $this->Province->create();
	    if ($this->Province->save($this->request->data)) {
	      echo json_encode($this->Province->getLastInsertID());
	    } else {
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
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
			$this->request->data = $this->Province->find('first', $options);
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
		$this->Province->id = $id;
		if (!$this->Province->exists()) {
			throw new NotFoundException(__('Invalid province'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Province->delete()) {
			$this->Session->setFlash(__('The province has been deleted.'));
		} else {
			$this->Session->setFlash(__('The province could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
