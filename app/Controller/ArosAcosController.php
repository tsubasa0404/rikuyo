<?php

  App::uses('AppController', 'Controller');

class ArosAcosController extends AppController {
  //Aclを作成したら、下記の4行は削除します。
  //function beforeFilter() {
  //  parent::beforeFilter();
  //  $this->Auth->allow();
  //}

  public function index() {
    $this->ArosAco->recursive = 0;
    $this->set('arosAcos', $this->paginate());
  }

  public function add() {
    $aros = $this->ArosAco->Aro->find('list');
    $acos = $this->ArosAco->Aco->find('list',array('fields'=>array('alias','alias')));
    $this->set(compact('aros', 'acos'));
  }

  public function edit($id = null) {
    $this->ArosAco->id = $id;
    $this->request->data = $this->ArosAco->read(null, $id);
    $aros = $this->ArosAco->Aro->find('list');
    $acos = $this->ArosAco->Aco->find('list',array('fields'=>array('alias','alias')));
    $this->set(compact('aros', 'acos'));
  }

  public function view($id = null) {
    $this->ArosAco->id = $id;
    if (!$this->ArosAco->exists()) {
    throw new NotFoundException(__('Invalid user'));
    }
    $this->set('arosAco', $this->ArosAco->read(null, $id));
  }

  public function acl_edit($id=null){
    if($this->request->is('post')){
      $aro=$this->User->Role;
      $aro->id=$this->request->data['ArosAco']['aro_id'];
      $aco=$this->request->data['ArosAco']['aco_id'];
      $create=$this->request->data['ArosAco']['create'];
      $read=$this->request->data['ArosAco']['read'];
      $update=$this->request->data['ArosAco']['update'];
      $delete=$this->request->data['ArosAco']['delete'];

      //var_dump($aro);
      var_dump($aco);
      var_dump($create);
      var_dump($read);
      var_dump($update);
      var_dump($delete);
      die();

      //パーミッションの設定
      $this->Acl->$create($aro,$aco,'create');
      $this->Acl->$read($aro,$aco,'read');
      $this->Acl->$update($aro,$aco,'update');
      $this->Acl->$delete($aro,$aco,'delete');
      //リストAclに移動
      $this->redirect(array('action' => 'index'));
    }
    $roles = $this->User->Role->find('list');
    $this->set(compact('roles'));
  }
}