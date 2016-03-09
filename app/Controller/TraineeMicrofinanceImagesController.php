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

      $title                = $this->request->data['TraineeMicrofinanceImage']['title'];
      $trainee_control_no   = $this->request->data['TraineeMicrofinanceImage']['trainee_control_no'];
      $org_img_file_name    = $this->request->data['TraineeMicrofinanceImage']['img']['name'];
      $ext                  = substr($org_img_file_name, -4);
      $new_img_file_name    = $trainee_control_no . "_" . date('Ymdhis') . $ext;
      $this->request->data['TraineeMicrofinanceImage']['img']['name']   = $new_img_file_name;


			if ($this->TraineeMicrofinanceImage->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance image has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee microfinance image could not be saved. Please, try again.'), 'error_flash');
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
			$this->Session->setFlash(__('The trainee microfinance image has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The trainee microfinance image could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect($this->referer());
	}
}
