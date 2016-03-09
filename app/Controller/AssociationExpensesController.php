<?php
App::uses('AppController', 'Controller');
/**
 * AssociationExpenses Controller
 *
 * @property AssociationExpense $AssociationExpense
 * @property PaginatorComponent $Paginator
 */
class AssociationExpensesController extends AppController {

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
		$this->AssociationExpense->recursive = 0;
		$this->set('associationExpenses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssociationExpense->exists($id)) {
			throw new NotFoundException(__('Invalid association expense'));
		}
		$options = array('conditions' => array('AssociationExpense.' . $this->AssociationExpense->primaryKey => $id));
		$this->set('associationExpense', $this->AssociationExpense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssociationExpense->create();
			if ($this->AssociationExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The association expense has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The association expense could not be saved. Please, try again.'), 'error_flash');
			}
		}
		$associations = $this->AssociationExpense->Association->find('list');
		$this->set(compact('associations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AssociationExpense->exists($id)) {
			throw new NotFoundException(__('Invalid association expense'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssociationExpense->save($this->request->data)) {
				$this->Session->setFlash(__('The association expense has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'associations', 'action' => 'profile/'.$this->request->data['AssociationExpense']['association_id']));
			} else {
				$this->Session->setFlash(__('The association expense could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('AssociationExpense.' . $this->AssociationExpense->primaryKey => $id));
			$this->request->data = $this->AssociationExpense->find('first', $options);
		}
		$associations = $this->AssociationExpense->Association->find('list');
		$association_expenses = $this->AssociationExpense->find('all', array(
			'conditions' => array('AssociationExpense.id' => $id),
			'recursive' => -1));
		$this->set(compact('associations', 'id', 'association_expenses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AssociationExpense->id = $id;
		if (!$this->AssociationExpense->exists()) {
			throw new NotFoundException(__('Invalid association expense'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AssociationExpense->delete()) {
			$this->Session->setFlash(__('The association expense has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The association expense could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect($this->referer());
	}
}
