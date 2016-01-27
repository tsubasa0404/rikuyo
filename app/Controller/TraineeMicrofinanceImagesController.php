<?php
App::uses('AppController', 'Controller');
/**
 * TraineeMicrofinanceImages Controller
 *
 * @property TraineeMicrofinanceImage $TraineeMicrofinanceImage
 * @property PaginatorComponent $Paginator
 */
class TraineeMicrofinanceImagesController extends AppController {

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
		$this->TraineeMicrofinanceImage->recursive = 0;
		$this->set('traineeMicrofinanceImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeMicrofinanceImage->exists($id)) {
			throw new NotFoundException(__('Invalid trainee microfinance image'));
		}
		$options = array('conditions' => array('TraineeMicrofinanceImage.' . $this->TraineeMicrofinanceImage->primaryKey => $id));
		$this->set('traineeMicrofinanceImage', $this->TraineeMicrofinanceImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeMicrofinanceImage->create();
			if ($this->TraineeMicrofinanceImage->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee microfinance image could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeMicrofinanceImage->Trainee->find('list');
		$this->set(compact('trainees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraineeMicrofinanceImage->exists($id)) {
			throw new NotFoundException(__('Invalid trainee microfinance image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeMicrofinanceImage->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee microfinance image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeMicrofinanceImage.' . $this->TraineeMicrofinanceImage->primaryKey => $id));
			$this->request->data = $this->TraineeMicrofinanceImage->find('first', $options);
		}
		$trainees = $this->TraineeMicrofinanceImage->Trainee->find('list');
		$this->set(compact('trainees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineeMicrofinanceImage->id = $id;
		if (!$this->TraineeMicrofinanceImage->exists()) {
			throw new NotFoundException(__('Invalid trainee microfinance image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeMicrofinanceImage->delete()) {
			$this->Session->setFlash(__('The trainee microfinance image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee microfinance image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
