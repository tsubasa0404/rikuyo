<?php
App::uses('AppModel', 'Model');
/**
 * TraineeMicrofinanceRecord Model
 *
 * @property Trainee $Trainee
 * @property Status $Status
 */
class TraineeMicrofinanceRecord extends AppModel {




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
