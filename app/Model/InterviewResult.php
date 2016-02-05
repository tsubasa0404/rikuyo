<?php
App::uses('AppModel', 'Model');
/**
 * InterviewResult Model
 *
 * @property InterviewCandidate $InterviewCandidate
 */
class InterviewResult extends AppModel {


	public function optionResults($lang){
			$options = array(
				'order' => array('id' => 'asc')
			);

		if($lang == 'ja'){
			$fields = array(
				'fields' => array(
					'id',
					'result_jp',
				)
			);
		} else {
			$fields = array(
				'fields' =>array(
					'id',
					'result_en'
					)
				);
		}
		$options = array_merge($options, $fields);
		return $this->find('list', $options);
	}

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
