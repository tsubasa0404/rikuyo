<?php
App::uses('AppController', 'Controller');
/**
 * TraineeMicrofinanceRecords Controller
 *
 * @property TraineeMicrofinanceRecord $TraineeMicrofinanceRecord
 * @property PaginatorComponent $Paginator
 */
class TraineeMicrofinanceRecordsController extends AppController {

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
		$this->TraineeMicrofinanceRecord->recursive = 0;
		$this->set('traineeMicrofinanceRecords', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeMicrofinanceRecord->exists($id)) {
			throw new NotFoundException(__('Invalid trainee microfinance record'));
		}
		$options = array('conditions' => array('TraineeMicrofinanceRecord.' . $this->TraineeMicrofinanceRecord->primaryKey => $id));
		$this->set('traineeMicrofinanceRecord', $this->TraineeMicrofinanceRecord->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeMicrofinanceRecord->create();
			if ($this->TraineeMicrofinanceRecord->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance record has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee microfinance record could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeMicrofinanceRecord->Trainee->find('list');
		$statuses = $this->TraineeMicrofinanceRecord->Status->find('list');
		$this->set(compact('trainees', 'statuses'));
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['TraineeMicrofinanceRecord']['id'] = $_POST['id'];
	    $this->request->data['TraineeMicrofinanceRecord']['trainee_id'] = $_POST['trainee_id'];
	    $this->request->data['TraineeMicrofinanceRecord']['pay_month'] = $_POST['pay_month'];
	    $this->request->data['TraineeMicrofinanceRecord']['status_id'] = $_POST['status_id'];
	    $this->request->data['TraineeMicrofinanceRecord']['status_id'] = $_POST['status_id'];
	    $this->request->data['TraineeMicrofinanceRecord']['note'] = $_POST['note'];
	    $this->TraineeMicrofinanceRecord->create();
	    if ($this->TraineeMicrofinanceRecord->save($this->request->data)) {
	      echo json_encode($this->TraineeMicrofinanceRecord->getLastInsertID());
	    } else {
	    }
	  }
	}

	public function updateAjax($id = null) {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['TraineeMicrofinanceRecord']['id'] = $_POST['id'];
	    switch ($_POST['column']) {
	    	case 'status_id':
	    		$this->request->data['TraineeMicrofinanceRecord']['status_id'] = $_POST['val'];
	    		break;
    		case 'note':
	    		$this->request->data['TraineeMicrofinanceRecord']['note'] = $_POST['val'];
    			break;
	    	default:
	    		break;
	    }
	    if ($this->TraineeMicrofinanceRecord->save($this->request->data)) {
	      return true;
	    } else {
	    	return true;
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
		if (!$this->TraineeMicrofinanceRecord->exists($id)) {
			throw new NotFoundException(__('Invalid trainee microfinance record'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeMicrofinanceRecord->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee microfinance record has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'trainees', 'action' => 'profile', $this->request->data['TraineeMicrofinanceRecord']['trainee_id']));
			} else {
				$this->Session->setFlash(__('The trainee microfinance record could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('TraineeMicrofinanceRecord.' . $this->TraineeMicrofinanceRecord->primaryKey => $id));
			$this->request->data = $this->TraineeMicrofinanceRecord->find('first', $options);
		}
		$trainees = $this->TraineeMicrofinanceRecord->Trainee->find('list');

		$trainee_microfinance_records = $this->TraineeMicrofinanceRecord->find('first', array(
			'conditions' => array('id' => $id),
			'recursive' => -1) );
		$this->set(compact('trainees', 'trainee_microfinance_records'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineeMicrofinanceRecord->id = $id;
		if (!$this->TraineeMicrofinanceRecord->exists()) {
			throw new NotFoundException(__('Invalid trainee microfinance record'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeMicrofinanceRecord->delete()) {
			$this->Session->setFlash(__('The trainee microfinance record has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The trainee microfinance record could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect($this->referer());
	}
}
