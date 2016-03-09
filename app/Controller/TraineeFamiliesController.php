<?php
App::uses('AppController', 'Controller');
/**
 * TraineeFamilies Controller
 *
 * @property TraineeFamily $TraineeFamily
 * @property PaginatorComponent $Paginator
 */
class TraineeFamiliesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	public $uses = array(
		'Job',
		'TraineeFamily',
		'Trainee'
	);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TraineeFamily->recursive = 0;
		$this->set('traineeFamilies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeFamily->exists($id)) {
			throw new NotFoundException(__('Invalid trainee family'));
		}
		$options = array('conditions' => array('TraineeFamily.' . $this->TraineeFamily->primaryKey => $id));
		$this->set('traineeFamily', $this->TraineeFamily->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeFamily->create();
			if ($this->TraineeFamily->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee family has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee family could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeFamily->Trainee->find('list');
		$this->set(compact('trainees'));
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){

	    $this->request->data['TraineeFamily']['trainee_id'] = $_POST['trainee_id'];
	    $this->request->data['TraineeFamily']['name'] = $_POST['name'];
	    $this->request->data['TraineeFamily']['relationship'] = $_POST['relationship'];
	    $this->request->data['TraineeFamily']['birthday'] = $_POST['birthday'];
	    $this->request->data['TraineeFamily']['phone'] = $_POST['phone'];
	    $this->request->data['TraineeFamily']['job_id'] = $_POST['job_id'];
	    $this->TraineeFamily->create();
	    if ($this->TraineeFamily->save($this->request->data)) {
	      echo json_encode($this->TraineeFamily->getLastInsertID());
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
		if (!$this->TraineeFamily->exists($id)) {
			throw new NotFoundException(__('Invalid trainee family'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$trainee_id = $this->request->data['TraineeFamily']['trainee_id'];
			if ($this->TraineeFamily->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee family has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'trainees', 'action' => 'profile', $trainee_id));
			} else {
				$this->Session->setFlash(__('The trainee family could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeFamily.' . $this->TraineeFamily->primaryKey => $id));
			$this->request->data = $this->TraineeFamily->find('first', $options);
		}
		$lang = $this->__setLang();
		$option_jobs = $this->Job->optionJobs($lang);
		$trainees = $this->TraineeFamily->Trainee->find('list');
		$this->set(compact('trainees', 'option_jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineeFamily->id = $id;
		if (!$this->TraineeFamily->exists()) {
			throw new NotFoundException(__('Invalid trainee family'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeFamily->delete()) {
			$this->Session->setFlash(__('The trainee family has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The trainee family could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
