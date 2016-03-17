<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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

		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		$roles = $this->User->Role->find('list', array(
			'fields' => array('id', 'role'),
			'order' => array('id' => 'asc') ));
		$roles_list = $this->User->Role->find('all', array(
			'fields' => array('id', 'role'),
			'order' => array('id' => 'asc') ));
		$this->set(compact('roles', 'roles_list'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->User->create();
			$this->User->validates();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'success_flash', "", 'add_user');
				return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please try again.'),'error_flash',"" ,'add_user');
					return $this->redirect(array('action' => 'index'));
				}
		}
		$roles = $this->User->Role->find('list', array('fields' => array('id', 'role')));
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been changed.'), 'success_flash', "", 'user_table');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be changed. Please, try again.'), 'error_flash', "", "edit_user");
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list', array('fields' => array('id', 'role')));
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {

		} else {

		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login() {
		$this->layout = '';
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
        $this->Session->setFlash('Your username or password was incorrect.', 'error_flash');
    }
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	//ACL作成用のアクション
	public function acl_add($id=null){
		if($this->request->is('post')){
			$aro=$this->User->Role;
			$aro->id=$this->request->data['Acl']['role_id'];
			$aco=$this->request->data['Acl']['aco'];
			$create=$this->request->data['Acl']['create'];
			$read=$this->request->data['Acl']['read'];
			$update=$this->request->data['Acl']['update'];
			$delete=$this->request->data['Acl']['delete'];

			//パーミッションの設定
			$this->Acl->$create($aro,$aco,'create');
			$this->Acl->$read($aro,$aco,'read');
			$this->Acl->$update($aro,$aco,'update');
			$this->Acl->$delete($aro,$aco,'delete');
			//リストAclに移動
			$this->redirect('../arosacos/index');
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

	//ACL編集用のアクション
	public function acl_edit($id=null){
		if($this->request->is('post')){
			$aro=$this->User->Role;
			$aro->id=$this->request->data['ArosAco']['aro_id'];
			$aco=$this->request->data['ArosAco']['aco_id'];
			$create=$this->request->data['ArosAco']['create'];
			$read=$this->request->data['ArosAco']['read'];
			$update=$this->request->data['ArosAco']['update'];
			$delete=$this->request->data['ArosAco']['delete'];

			//パーミッションの設定
			$this->Acl->$create($aro,$aco,'create');
			$this->Acl->$read($aro,$aco,'read');
			$this->Acl->$update($aro,$aco,'update');
			$this->Acl->$delete($aro,$aco,'delete');
			//リストAclに移動
			$this->redirect('../arosacos/index');
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}
}


