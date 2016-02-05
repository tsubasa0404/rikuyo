<?php
App::uses('AppModel', 'Model');
/**
 * TraineeFamily Model
 *
 * @property Trainee $Trainee
 */
class TraineeFamily extends AppModel {


	public function traineeFamilyList($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'TraineeFamily.trainee_id'=> $trainee_id
			);
		$options['fields'] = array(
			'TraineeFamily.id',
			'TraineeFamily.name',
			'TraineeFamily.relationship',
			'TraineeFamily.birthday',
			'TraineeFamily.job_id',
			'TraineeFamily.phone',
			'TraineeFamily.note',
			'Job.job_jp',
			'Job.job_en'
			);
		$options['joins'][] = array(
			'table' => 'jobs',
			'alias' => 'Job',
			'type' => 'LEFT',
			'conditions' => 'TraineeFamily.job_id=Job.id'
			);
		return $this->find('all', $options);
	}

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
