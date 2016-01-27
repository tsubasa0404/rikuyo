<?php
App::uses('AppModel', 'Model');
/**
 * Task Model
 *
 * @property Status $Status
 */
class Task extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Status' => array(
			'className' => 'StatusList',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
