<?php
App::uses('AppModel', 'Model');
/**
 * Notification Model
 *
 * @property Status $Status
 */
class Notification extends AppModel {




/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
