<?php
App::uses('AppModel', 'Model');
/**
 * DocName Model
 *
 * @property Folder $Folder
 * @property SubFolder $SubFolder
 * @property AssociationDocument $AssociationDocument
 */
class DocName extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Folder' => array(
			'className' => 'DocFolder',
			'foreignKey' => 'folder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubFolder' => array(
			'className' => 'SubFolder',
			'foreignKey' => 'sub_folder_id',
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
		'AssociationDocument' => array(
			'className' => 'AssociationDocument',
			'foreignKey' => 'doc_name_id',
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
