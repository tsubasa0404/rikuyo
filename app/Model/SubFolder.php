<?php
App::uses('AppModel', 'Model');
/**
 * SubFolder Model
 *
 * @property Folder $Folder
 * @property DocName $DocName
 */
class SubFolder extends AppModel {

  //doc names indexページ用サブフォルダー
  public function subfolders(){
    $options = array();
    $options['conditions'] = array(
      'SubFolder.flag'=> 0
      );
    $options['fields'] = array(
      'Folder.id',
      'SubFolder.id',
      'SubFolder.sub_folder_jp',
      'SubFolder.sub_folder_en',
      );
    $options['joins'][] = array(
      'table' => 'doc_folders',
      'alias' => 'Folder',
      'type' => 'LEFT',
      'conditions' => 'Folder.id = SubFolder.folder_id'
      );
    return $this->find('all', $options);
  }

	public function optionSubFolders(){
    $options = array();
    $options = array(
      'conditions' => array(
      	'SubFolder.flag'=> 0
      ),
      'order' => array('SubFolder.folder_id' => 'asc'),
      );

    return $this->find('all', $options);
  }

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DocFolder' => array(
			'className' => 'DocFolder',
			'foreignKey' => 'folder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DocName' => array(
			'className' => 'DocName',
			'foreignKey' => 'sub_folder_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
