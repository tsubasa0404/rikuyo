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
