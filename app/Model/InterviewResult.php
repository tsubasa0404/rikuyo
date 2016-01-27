<?php
App::uses('AppModel', 'Model');
/**
 * InterviewResult Model
 *
 * @property InterviewCandidate $InterviewCandidate
 */
class InterviewResult extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'InterviewCandidate' => array(
			'className' => 'InterviewCandidate',
			'foreignKey' => 'interview_result_id',
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
