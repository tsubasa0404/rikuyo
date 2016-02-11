<?php
App::uses('AppController', 'Controller');
/**
 * TraineeVoices Controller
 *
 * @property TraineeVoice $TraineeVoice
 * @property PaginatorComponent $Paginator
 */
class TraineeVoicesController extends AppController {

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
		$this->TraineeVoice->recursive = 0;
		$this->set('traineeVoices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeVoice->exists($id)) {
			throw new NotFoundException(__('Invalid trainee voice'));
		}
		$options = array('conditions' => array('TraineeVoice.' . $this->TraineeVoice->primaryKey => $id));
		$this->set('traineeVoice', $this->TraineeVoice->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeVoice->create();
			if ($this->TraineeVoice->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee voice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee voice could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeVoice->Trainee->find('list');
		$this->set(compact('trainees'));
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['TraineeVoice']['trainee_id'] = $_POST['trainee_id'];
	    $this->request->data['TraineeVoice']['title_en'] = $_POST['title_en'];
	    $this->request->data['TraineeVoice']['voice_en'] = $_POST['voice_en'];
	    $this->TraineeVoice->create();
	    if ($this->TraineeVoice->save($this->request->data)) {
	      echo json_encode($this->TraineeVoice->getLastInsertID());
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
		if (!$this->TraineeVoice->exists($id)) {
			throw new NotFoundException(__('Invalid trainee voice'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeVoice->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee voice has been saved.'));
				return $this->redirect(array('controller' => 'trainees', 'action' => 'profile', $id));
			} else {
				$this->Session->setFlash(__('The trainee voice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeVoice.' . $this->TraineeVoice->primaryKey => $id));
			$this->request->data = $this->TraineeVoice->find('first', $options);
		}
		$trainees = $this->TraineeVoice->Trainee->find('list');
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
		$this->TraineeVoice->id = $id;
		if (!$this->TraineeVoice->exists()) {
			throw new NotFoundException(__('Invalid trainee voice'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeVoice->delete()) {
			$this->Session->setFlash(__('The trainee voice has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee voice could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
