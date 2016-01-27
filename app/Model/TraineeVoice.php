<?php
App::uses('AppModel', 'Model');
/**
 * TraineeVoice Model
 *
 * @property Trainee $Trainee
 */
class TraineeVoice extends AppModel {


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
