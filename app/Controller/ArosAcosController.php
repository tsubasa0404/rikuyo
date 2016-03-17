<?php

  App::uses('AppController', 'Controller');

class ArosAcosController extends AppController {
  //Aclを作成したら、下記の4行は削除します。
  function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow();
  }

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
}