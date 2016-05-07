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

/**
 * Report index page
 * 面接合格者タブ
 */
	//面接合格者人数を月毎に取得
	public function passed_trainees_total_list($y){
		$options = array();
		$options['conditions'] = array(
			'InterviewCandidate.interview_result_id'=> 2, //面接合格
			'DATE_FORMAT(PassedTraineeTotalListInterview.interview_date,"%Y")' => $y
			);
		$options['fields'] = array(
			'DATE_FORMAT(PassedTraineeTotalListInterview.interview_date, "%Y-%m") as YM',
			'DATE_FORMAT(PassedTraineeTotalListInterview.interview_date, "%M") as month_en',
			'DATE_FORMAT(PassedTraineeTotalListInterview.interview_date, "%m") as month',
			'count(InterviewCandidate.id) as total'
			);
		$options['joins'][] = array(
			'table' => 'interviews',
			'alias' => 'PassedTraineeTotalListInterview',
			'type' => 'LEFT',
			'conditions' => 'PassedTraineeTotalListInterview.id = InterviewCandidate.interview_id'
			);
		$options['joins'][] = array(
		'table' => 'trainees',
		'alias' => 'PassedTraineeTotalListTrainee',
		'type' => 'LEFT',
		'conditions' => array(
			'PassedTraineeTotalListTrainee.id = InterviewCandidate.trainee_id',
			'PassedTraineeTotalListTrainee.flag = 0',
			'PassedTraineeTotalListTrainee.student_status_id = 4')
		);
		$options['group'] = 'DATE_FORMAT(PassedTraineeTotalListInterview.interview_date,"%Y-%m" )';
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

	//面接合格者数を男女別に取得
	public function passed_trainees_by_gender($y){
		$options = array();
		$options['conditions'] = array(
			'InterviewCandidate.interview_result_id'=> 2, //面接合格
			'DATE_FORMAT(PassedTraineeByGenderInterview.interview_date,"%Y")' => $y
			);
		$options['fields'] = array(
			'DATE_FORMAT(PassedTraineeByGenderInterview.interview_date, "%Y") as Y',
			'PassedTraineeByGenderTrainee.sex',
			'count(Distinct PassedTraineeByGenderTrainee.id) as total'
			);
		$options['joins'][] = array(
			'table' => 'interviews',
			'alias' => 'PassedTraineeByGenderInterview',
			'type' => 'LEFT',
			'conditions' => 'InterviewCandidate.interview_id = PassedTraineeByGenderInterview.id'
			);
		$options['joins'][] = array(
			'table' => 'trainees',
			'alias' => 'PassedTraineeByGenderTrainee',
			'type' => 'LEFT',
			'conditions' => array(
				//'InterviewCandidate.trainee_id = PassedTraineeByGenderTrainee.id ',
				'PassedTraineeByGenderTrainee.flag = 0',
				'PassedTraineeByGenderTrainee.student_status_id = 4')
			);
		$options['group'] = 'PassedTraineeByGenderTrainee.sex';
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}


	//面接合格者数を出国状況別に取得
	public function passed_trainees_by_departure_status($y){
		$options = array();
		$options['conditions'] = array(
			'InterviewCandidate.interview_result_id'=> 2, //面接合格
			'DATE_FORMAT(PassedTraineeByDepartureStatusInterview.interview_date,"%Y")' => $y
			);
		$options['fields'] = array(
			'DATE_FORMAT(PassedTraineeByDepartureStatusInterview.interview_date, "%Y") as Y',
			'PassedTraineeByDepartureStatusTrainee.departure_status_id',
			'count(InterviewCandidate.id) as total'
			);
		$options['joins'][] = array(
			'table' => 'interviews',
			'alias' => 'PassedTraineeByDepartureStatusInterview',
			'type' => 'LEFT',
			'conditions' => array(
				'PassedTraineeByDepartureStatusInterview.id = InterviewCandidate.interview_id',
				'DATE_FORMAT(PassedTraineeByDepartureStatusInterview.interview_date,"%Y")' => $y)
			);
		$options['joins'][] = array(
			'table' => 'trainees',
			'alias' => 'PassedTraineeByDepartureStatusTrainee',
			'type' => 'LEFT',
			'conditions' => array(
				'PassedTraineeByDepartureStatusTrainee.id = InterviewCandidate.trainee_id',
				'PassedTraineeByDepartureStatusTrainee.flag = 0')
			);
		$options['group'] = 'PassedTraineeByDepartureStatusTrainee.departure_status_id';
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

/**
 * Report index page
 * 面接合格者かつ出国済み者タブ
 */
	//出国済み人数を月毎に取得
		public function departured_trainees_total_list($y){
		$options = array();
		$options['conditions'] = array(
			);
		$options['fields'] = array(
			'DATE_FORMAT(DeparturedTraineeTotalListTrainee.departure_date, "%Y-%m") as YM',
			'DATE_FORMAT(DeparturedTraineeTotalListTrainee.departure_date, "%M") as month_en',
			'DATE_FORMAT(DeparturedTraineeTotalListTrainee.departure_date, "%m") as month',
			'count(Distinct DeparturedTraineeTotalListTrainee.id) as total'
			);
		$options['joins'][] = array(
		'table' => 'trainees',
		'alias' => 'DeparturedTraineeTotalListTrainee',
		'type' => 'LEFT',
		'conditions' => array(
			'DeparturedTraineeTotalListTrainee.flag = 0',
			'DeparturedTraineeTotalListTrainee.student_status_id = 4',
			'DeparturedTraineeTotalListTrainee.departure_status_id = 1',
			'DATE_FORMAT(DeparturedTraineeTotalListTrainee.departure_date,"%Y")' => $y)
		);
		$options['group'] = 'DATE_FORMAT(DeparturedTraineeTotalListTrainee.departure_date,"%Y-%m" )';
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

	//出国数を男女別に取得
	public function departured_trainees_by_gender($y){
		$options = array();
		$options['conditions'] = array(
			);
		$options['fields'] = array(
			'DATE_FORMAT(DeparturedTraineeByGenderTrainee.departure_date, "%Y") as Y',
			'DeparturedTraineeByGenderTrainee.sex',
			'count(Distinct DeparturedTraineeByGenderTrainee.id) as total'
			);
		$options['joins'][] = array(
			'table' => 'trainees',
			'alias' => 'DeparturedTraineeByGenderTrainee',
			'type' => 'LEFT',
			'conditions' => array(
				//'InterviewCandidate.trainee_id = DeparturedTraineeByGenderTrainee.id ',
				'DeparturedTraineeByGenderTrainee.flag = 0',
				'DeparturedTraineeByGenderTrainee.student_status_id = 4',
				'DeparturedTraineeByGenderTrainee.departure_status_id = 1',
				'DATE_FORMAT(DeparturedTraineeByGenderTrainee.departure_date,"%Y")' => $y)
			);
		$options['group'] = 'DeparturedTraineeByGenderTrainee.sex';
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}




	//printout用合格者一覧取得
	public function successTrainees($interview_id){
		$options = array();
		$options['conditions'] = array(
			'InterviewCandidate.interview_id'=> $interview_id,
			'InterviewCandidate.interview_result_id' => 2 //合格者2
			);
		return $this->find('all', $options);
	}

	//Profileページ用候補者一覧取得
	//Selectページ用候補者一覧取得
	public function candidateList($interview_id){
		$options = array();
		$options['conditions'] = array(
			'InterviewCandidate.interview_id'=> $interview_id
			);
		$options['fields'] = array(
			'Int.id',
			'CandidateTrainee.id',
			'CandidateTrainee.control_no',
			'CandidateTrainee.family_name_en',
			'CandidateTrainee.given_name_en',
			'CandidateTrainee.sex',
			'CandidateTrainee.birthday',
			'ProfImg.id',
			'ProfImg.trainee_id',
			'ProfImg.img_file_name',
			'ProfImg.trainee_control_no',
			'InterviewCandidate.interview_result_id',
			'InterviewCandidate.id',
			'Result.id',
			'Result.result_jp',
			'Result.result_en',
			);
		$options['joins'][] = array(
			'table' => 'interviews',
			'alias' => 'Int',
			'type' => 'LEFT',
			'conditions' => 'Int.id = InterviewCandidate.interview_id'
			);
		$options['joins'][] = array(
			'table' => 'trainees',
			'alias' => 'CandidateTrainee',
			'type' => 'LEFT',
			'conditions' => 'InterviewCandidate.trainee_id = CandidateTrainee.id'
			);
		$options['joins'][] = array(
			'table' => 'trainee_profile_images',
			'alias' => 'ProfImg',
			'type' => 'LEFT',
			'conditions' => 'ProfImg.trainee_id = CandidateTrainee.id'
			);
		$options['joins'][] = array(
			'table' => 'interview_results',
			'alias' => 'Result',
			'type' => 'LEFT',
			'conditions' => 'Result.id = InterviewCandidate.interview_result_id'
			);
		$options['group'] = array('CandidateTrainee.id');
		return $this->find('all', $options);
	}



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
