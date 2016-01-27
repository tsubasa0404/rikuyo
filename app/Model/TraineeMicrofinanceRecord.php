<?php
App::uses('AppModel', 'Model');
/**
 * TraineeMicrofinanceRecord Model
 *
 * @property Trainee $Trainee
 * @property Status $Status
 */
class TraineeMicrofinanceRecord extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Trainee' => array(
			'className' => 'Trainee',
			'foreignKey' => 'trainee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
