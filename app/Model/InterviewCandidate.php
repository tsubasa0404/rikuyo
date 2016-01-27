<?php
App::uses('AppModel', 'Model');
/**
 * InterviewCandidate Model
 *
 * @property Interview $Interview
 * @property Trainee $Trainee
 * @property InterviewResult $InterviewResult
 */
class InterviewCandidate extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Interview' => array(
			'className' => 'Interview',
			'foreignKey' => 'interview_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Trainee' => array(
			'className' => 'Trainee',
			'foreignKey' => 'trainee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'InterviewResult' => array(
			'className' => 'InterviewResult',
			'foreignKey' => 'interview_result_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
