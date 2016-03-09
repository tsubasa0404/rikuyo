<?php
App::uses('AppController', 'Controller');
/**
 * TraineeExpenses Controller
 *
 * @property TraineeExpense $TraineeExpense
 * @property PaginatorComponent $Paginator
 */
class TraineeExpensesController extends AppController {

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
		$this->TraineeExpense->recursive = 0;
		$this->set('traineeExpenses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeExpense->exists($id)) {
			throw new NotFoundException(__('Invalid trainee expense'));
		}
		$options = array('conditions' => array('TraineeExpense.' . $this->TraineeExpense->primaryKey => $id));
		$this->set('traineeExpense', $this->TraineeExpense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeExpense->create();
			if ($this->TraineeExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee expense has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee expense could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeExpense->Trainee->find('list');
		$this->set(compact('trainees'));
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['TraineeExpense']['id'] = $_POST['id'];
	    $this->request->data['TraineeExpense']['trainee_id'] = $_POST['trainee_id'];
	    $this->request->data['TraineeExpense']['expected_date'] = $_POST['expected_date'];
	    $this->request->data['TraineeExpense']['expected_price'] = $_POST['expected_price'];
	    $this->TraineeExpense->create();
	    if ($this->TraineeExpense->save($this->request->data)) {
	      echo json_encode($this->TraineeExpense->getLastInsertID());
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
	    $this->request->data['TraineeExpense']['id'] = $_POST['id'];
	    switch ($_POST['column']) {
	    	case 'pay_date':
	    		$this->request->data['TraineeExpense']['pay_date'] = $_POST['val'];
	    		break;
    		case 'pay_price':
	    		$this->request->data['TraineeExpense']['pay_price'] = $_POST['val'];
    			break;
    		case 'note':
    			$this->request->data['TraineeExpense']['note'] = $_POST['val'];
    		break;
	    	default:
	    		break;
	    }
	    if ($this->TraineeExpense->save($this->request->data)) {
	      return true;
	    } else {
	    	return true;
	    }
	  }
	}

	//これいる？
	public function update($trainee_id=null) {
		if ($this->request->is('post')) {
			if ($this->TraineeExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee expense has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee expense could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeExpense->Trainee->find('list');
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
		if (!$this->TraineeExpense->exists($id)) {
			throw new NotFoundException(__('Invalid trainee expense'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee expense has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'trainees', 'action' => 'profile', $this->request->data['TraineeExpense']['trainee_id']));
			} else {
				$this->Session->setFlash(__('The trainee expense could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('TraineeExpense.' . $this->TraineeExpense->primaryKey => $id));
			$this->request->data = $this->TraineeExpense->find('first', $options);
		}
		$trainees = $this->TraineeExpense->Trainee->find('list');
		$trainee_expenses = $this->TraineeExpense->find('first', array(
			'conditions' => array('id' => $id),
			'recursive' => -1) );
		$this->set(compact('trainees', 'trainee_expenses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineeExpense->id = $id;
		if (!$this->TraineeExpense->exists()) {
			throw new NotFoundException(__('Invalid trainee expense'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeExpense->delete()) {
			$this->Session->setFlash(__('The trainee expense has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The trainee expense could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect($this->referer());
	}
}
