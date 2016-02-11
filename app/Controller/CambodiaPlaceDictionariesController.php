<?php
App::uses('AppController', 'Controller');
/**
 * CambodiaPlaceDictionaries Controller
 *
 * @property CambodiaPlaceDictionary $CambodiaPlaceDictionary
 * @property PaginatorComponent $Paginator
 */
class CambodiaPlaceDictionariesController extends AppController {

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
		$this->CambodiaPlaceDictionary->recursive = 0;
		$this->set('cambodiaPlaceDictionaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CambodiaPlaceDictionary->exists($id)) {
			throw new NotFoundException(__('Invalid cambodia place dictionary'));
		}
		$options = array('conditions' => array('CambodiaPlaceDictionary.' . $this->CambodiaPlaceDictionary->primaryKey => $id));
		$this->set('cambodiaPlaceDictionary', $this->CambodiaPlaceDictionary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CambodiaPlaceDictionary->create();
			if ($this->CambodiaPlaceDictionary->save($this->request->data)) {
				$this->Session->setFlash(__('The cambodia place dictionary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cambodia place dictionary could not be saved. Please, try again.'));
			}
		}
	}

		public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['CambodiaPlaceDictionary']['id'] = $_POST['id'];
	    $this->request->data['CambodiaPlaceDictionary']['place_jp'] = $_POST['place_jp'];
	    $this->request->data['CambodiaPlaceDictionary']['place_en'] = $_POST['place_en'];
	    $this->request->data['CambodiaPlaceDictionary']['place_kh'] = $_POST['place_kh'];
	    $this->CambodiaPlaceDictionary->create();
	    if ($this->CambodiaPlaceDictionary->save($this->request->data)) {
	      echo json_encode($this->CambodiaPlaceDictionary->getLastInsertID());
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
		if (!$this->CambodiaPlaceDictionary->exists($id)) {
			throw new NotFoundException(__('Invalid cambodia place dictionary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CambodiaPlaceDictionary->save($this->request->data)) {
				$this->Session->setFlash(__('The cambodia place dictionary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cambodia place dictionary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CambodiaPlaceDictionary.' . $this->CambodiaPlaceDictionary->primaryKey => $id));
			$this->request->data = $this->CambodiaPlaceDictionary->find('first', $options);
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
		$this->CambodiaPlaceDictionary->id = $id;
		if (!$this->CambodiaPlaceDictionary->exists()) {
			throw new NotFoundException(__('Invalid cambodia place dictionary'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CambodiaPlaceDictionary->delete()) {
			$this->Session->setFlash(__('The cambodia place dictionary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cambodia place dictionary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
