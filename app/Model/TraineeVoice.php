<?php
App::uses('AppModel', 'Model');
/**
 * TraineeVoice Model
 *
 * @property Trainee $Trainee
 */
class TraineeVoice extends AppModel {




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
