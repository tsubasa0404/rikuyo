<?php
App::uses('AppModel', 'Model');
/**
 * Province Model
 *
 * @property Agent $Agent
 * @property District $District
 * @property Trainee $Trainee
 */
class Province extends AppModel {

	public function optionProvince(){
		$options = array(
			'fields' => array(
				'Province.id',
				'Province.province_en',
			),
			'order' => array('Province.province_en' => 'asc'),
		);
		return $this->find('list', $options);
	}

	//面接合格者数を出身地別に取得
	public function passed_trainees_by_homeland($y){
		$options = array();
		$options['fields'] = array(
			'DATE_FORMAT(PassedTraineeByHomelandInterview.interview_date, "%Y") as Y',
			'Province.id',
			'Province.province_en',
			'count(Distinct PassedTraineeByHomelandTrainee.id) as total'
			);
		$options['joins'][] = array(
			'table' => 'trainees',
			'alias' => 'PassedTraineeByHomelandTrainee',
			'type' => 'LEFT OUTER',
			'conditions' => array(
				'Province.id = PassedTraineeByHomelandTrainee.birthplace_province_id',
				'PassedTraineeByHomelandTrainee.flag = 0',
				'PassedTraineeByHomelandTrainee.student_status_id = 4')
			);

		$options['joins'][] = array(
		'table' => 'interview_candidates',
		'alias' => 'PassedTraineeByHomelandInterviewCandidate',
		'type' => 'LEFT',
		'conditions' => array(
			'PassedTraineeByHomelandTrainee.id = PassedTraineeByHomelandInterviewCandidate.trainee_id',
			//'PassedTraineeByHomelandInterviewCandidate.interview_result_id = 2' // 面接合格者
		));

		$options['joins'][] = array(
			'table' => 'interviews',
			'alias' => 'PassedTraineeByHomelandInterview',
			'type' => 'LEFT',
			'conditions' => array(
				'PassedTraineeByHomelandInterviewCandidate.interview_id = PassedTraineeByHomelandInterview.id',
				'DATE_FORMAT(PassedTraineeByHomelandInterview.interview_date,"%Y")' => $y
			));
		$options['conditions'] = array(
			'DATE_FORMAT(PassedTraineeByHomelandInterview.interview_date,"%Y")' => $y
			);
		$options['group'] = 'Province.id';
		$options['order'] = array('Province.province_en' => 'asc');
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

	//出国済み数を出身地別に取得
	public function departured_trainees_by_homeland($y){
		$options = array();
		$options['fields'] = array(
			'DATE_FORMAT(DeparturedTraineeByHomelandTrainee.departure_date, "%Y") as Y',
			'Province.id',
			'Province.province_en',
			'count(Distinct DeparturedTraineeByHomelandTrainee.id) as total'
			);
		$options['joins'][] = array(
			'table' => 'trainees',
			'alias' => 'DeparturedTraineeByHomelandTrainee',
			'type' => 'LEFT OUTER',
			'conditions' => array('Province.id = DeparturedTraineeByHomelandTrainee.birthplace_province_id',
				'DeparturedTraineeByHomelandTrainee.departure_status_id = 1',
				'DeparturedTraineeByHomelandTrainee.flag = 0',
				'DATE_FORMAT(DeparturedTraineeByHomelandTrainee.departure_date, "%Y")' => $y)
			);

		$options['conditions'] = array(
			//'DATE_FORMAT(DeparturedTraineeByHomelandTrainee.departure_date, "%Y")' => $y
			);
		$options['group'] = 'Province.id';
		$options['order'] = array('Province.province_en' => 'asc');
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}



/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Agent' => array(
			'className' => 'Agent',
			'foreignKey' => 'province_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'province_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Trainee' => array(
			'className' => 'Trainee',
			'foreignKey' => 'province_id',
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
