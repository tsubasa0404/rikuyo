<?php
App::uses('AppModel', 'Model');
/**
 * SubFolder Model
 *
 * @property Folder $Folder
 * @property DocName $DocName
 */
class SubFolder extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
