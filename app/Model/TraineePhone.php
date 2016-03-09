<?php
App::uses('AppModel', 'Model');
/**
 * TraineePhone Model
 *
 * @property Trainee $Trainee
 */
class TraineePhone extends AppModel {




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
