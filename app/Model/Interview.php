<?php
App::uses('AppModel', 'Model');
/**
 * Interview Model
 *
 * @property Company $Company
 * @property InterviewCandidate $InterviewCandidate
 * @property InterviewDocStatusList $InterviewDocStatusList
 */
class Interview extends AppModel {

	//output_doc用interview prof取得
	public function printProf($interview_id){
		$options = array();
		$options['conditions'] = array(
			'Interview.id'=> $interview_id
			);
		$options['fields'] = array(
			'Interview.id',
			'Interview.company_id',
			'Interview.job',
			'Interview.agent_id',
			'ComPrint.company_en',
			'ComPrint.company_jp',
			'ComPrint.address_jp',
			'ComPrint.province',
			'ComPrint.phone1',
			'ComPrint.rep_family_name_jp',
			'ComPrint.rep_given_name_jp',
			'Association.association_en',
			'Association.association_jp',
			'Association.province',
			'Association.address_jp',
			'Association.address_en',
			'Association.phone1',
			'Association.rep_family_name_jp',
			'Association.rep_given_name_jp',
			'Association.rep_family_name_en',
			'Association.rep_given_name_en',
			'Association.sector',
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'ComPrint',
			'type' => 'LEFT',
			'conditions' => array(
					'Interview.company_id = ComPrint.id',
				)
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Association',
			'type' => 'LEFT',
			'conditions' => array(
					'ComPrint.association_id = Association.id'
				)
			);
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

	//interviewテーブル用取得
	public function interviewList(){
		$options = array();
		$options['conditions'] = array(
			'Interview.flag'=> 0,
			'Interview.status' => 0,
			);
		$options['fields'] = array(
			'Interview.id',
			'Interview.interview_date',
			'Interview.interview_time',
			'Interview.interview_staff',
			'Company.id',
			'Company.company_en',
			'Company.company_jp',
			'Association.id',
			'Association.association_en',
			'Association.association_jp',
			'count(Candidate.id) as count'
			);
		$options['joins'][] = array(
			'table' => 'interview_candidates',
			'alias' => 'Candidate',
			'type' => 'LEFT',
			'conditions' => 'Candidate.interview_id = Interview.id'
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'Company',
			'type' => 'LEFT',
			'conditions' => 'Company.id = Interview.company_id'
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Association',
			'type' => 'LEFT',
			'conditions' => 'Association.id = Company.association_id'
			);

		$options['group'] = array('Interview.id');
		$options['order'] = array('Interview.interview_date' => 'asc', 'Interview.interview_time' => 'asc');
		return $this->find('all', $options);
	}

	//past interviews table
	public function pastInterviewsList(){


		$options = array();
		$options['conditions'] = array(
			'Interview.flag'=> 0,
			'Interview.status' => 1,
			);
		$options['fields'] = array(
			'Interview.id',
			'Interview.interview_date',
			'Interview.interview_time',
			'Interview.interview_staff',
			'Company.id',
			'Company.company_en',
			'Company.company_jp',
			'Association.id',
			'Association.association_en',
			'Association.association_jp',
			'count(Candidate.id) as count',

			);
		$options['joins'][] = array(
			'table' => 'interview_candidates',
			'alias' => 'Candidate',
			'type' => 'LEFT',
			'conditions' => 'Candidate.interview_id = Interview.id'
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'Company',
			'type' => 'LEFT',
			'conditions' => 'Company.id = Interview.company_id'
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Association',
			'type' => 'LEFT',
			'conditions' => 'Association.id = Company.association_id'
			);

		$options['group'] = array('Interview.id');
		$options['order'] = array('Interview.interview_date' => 'desc');
		return $this->find('all', $options);
	}

	//Profileページ用基本情報
	public function prof($interview_id){
		$options = array();
		$options['conditions'] = array(
			'Interview.id'=> $interview_id
			);
		$options['fields'] = array(
			'Interview.id',
			'Asso.id',
			'Asso.association_en',
			'Asso.association_jp',
			'Asso.province',
			'Asso.address_jp',
			'Asso.address_en',
			'Com.id',
			'Com.company_en',
			'Com.company_jp',
			'Interview.job',
			'Interview.work_place',
			'Interview.work_content',
			'Interview.work_schedule',
			'Interview.adoption_num',
			'Interview.sex',
			'Interview.age',
			'Interview.hourly_wage',
			'Interview.basic_wage',
			'Interview.deduction',
			'Interview.breakdown',
			'Interview.employment_insurance',
			'Interview.social_insurance',
			'Interview.boarding_fee',
			'Interview.utility_cost',
			'Interview.take_home',
			'Interview.wage_note',
			'Interview.request',
			'Interview.immigration_time',
			'Interview.start_time',
			'Interview.interview_date',
			'Interview.interview_time',
			'Interview.interview_place',
			'Interview.interview_detail',
			'Interview.interview_staff',
			'Job.job_jp',
			'Job.job_en',
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'Com',
			'type' => 'LEFT',
			'conditions' => 'Com.id = Interview.company_id'
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Asso',
			'type' => 'LEFT',
			'conditions' => 'Asso.id = Com.association_id'
			);
		$options['joins'][] = array(
			'table' => 'jobs',
			'alias' => 'Job',
			'type' => 'LEFT',
			'conditions' => 'Job.id = Interview.job'
			);
		return $this->find('first', $options);
	}




/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
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
			'foreignKey' => 'interview_id',
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
		'InterviewDocStatusList' => array(
			'className' => 'InterviewDocStatusList',
			'foreignKey' => 'interview_id',
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
