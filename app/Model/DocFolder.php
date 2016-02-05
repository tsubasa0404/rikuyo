<?php
App::uses('AppModel', 'Model');
/**
 * DocFolder Model
 *
 */
class DocFolder extends AppModel {



  public function folders(){
    $options = array();
    $options['conditions'] = array(
      'DocFolder.flag'=> 0
      );
    $options['fields'] = array(
      'DocFolder.id',
      'DocFolder.folder_jp',
      'DocFolder.folder_en',
      );
    return $this->find('all', $options);
  }

  public function optionFolders($lang){
    $options = array();
    $options = array(
      'conditions' => array(
      'flag'=> 0
      ));
    if($lang == 'ja'){
      $fields = array(
        'fields' => array(
          'id',
          'folder_jp'
        )
      );
    } else {
      $fields = array(
        'fields' =>array(
          'id',
          'folder_en'
          )
        );
    }
    $options = array_merge($options, $fields);
    return $this->find('list', $options);
  }
}
