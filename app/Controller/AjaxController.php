<?php

/**
*
*/
  //置いてるだけ。使ってない
class AjaxController extends AppController
{
  public $uses = array('DocName', 'DocTemplate');

  public function ajaxGetDocOption(){
    $this->autoRender = false;

    if(!$this->request->is('ajax')){
      throw new FileNotFoundException(__('Invalid ajax access'));
    }

    $id = $this->Client->find('all', array('MAX(Client.id'));
    $this->Client->id = $id + 1;
    $this->Client->create();
    if($this->Client->save($this->request->data)){
      $this->Session->setFlash('The client has been saved', 'flash_ajax_success');
      echo $this->lastIndertId();
    } else {
      $this->Session->setFlash('The client could not be saved. Please, try again.', 'flash_ajax_failure');
    }
  }
}