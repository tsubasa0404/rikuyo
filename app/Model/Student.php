<?php
App::uses('AppModel', 'Model');

class Student extends AppModel {



	//student list 学生一覧ページテーブル用データ
	public function studentList(){
		$options = array('conditions' => array(
			'Trainee.flag' => 0,
			'Trainee.student_status_id !=' => 4
			),
			'fields' => array(
				'Trainee.id',
				'Trainee.control_no',
				'Trainee.date_in',
				'Trainee.family_name_en',
				'Trainee.given_name_en',
				'Trainee.birthplace_province_id',
				'Trainee.birthday',
				'Trainee.phone',
				'Trainee.student_status_id',
				),
			'order' => array('Trainee.control_no' => 'asc')
		);
		return $this->find('all', $options);
	}



/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'commune_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'birthplace_province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'birthplace_district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'birthplace_commune_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job1_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TraineeClass' => array(
			'className' => 'TraineeClass',
			'foreignKey' => 'class_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'InterviewCandidate' => array(
			'className' => 'InterviewCandidate',
			'foreignKey' => 'trainee_id',
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
		'TraineeDocument' => array(
			'className' => 'TraineeDocument',
			'foreignKey' => 'trainee_id',
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
		'TraineeExpense' => array(
			'className' => 'TraineeExpense',
			'foreignKey' => 'trainee_id',
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
		'TraineeFamily' => array(
			'className' => 'TraineeFamily',
			'foreignKey' => 'trainee_id',
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
		'TraineeMicrofinanceImage' => array(
			'className' => 'TraineeMicrofinanceImage',
			'foreignKey' => 'trainee_id',
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
		'TraineeMicrofinanceRecord' => array(
			'className' => 'TraineeMicrofinanceRecord',
			'foreignKey' => 'trainee_id',
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
		'TraineePhone' => array(
			'className' => 'TraineePhone',
			'foreignKey' => 'trainee_id',
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
		'TraineeProfileImage' => array(
			'className' => 'TraineeProfileImage',
			'foreignKey' => 'trainee_id',
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
		'TraineeVoice' => array(
			'className' => 'TraineeVoice',
			'foreignKey' => 'trainee_id',
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
