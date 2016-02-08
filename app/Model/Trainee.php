<?php
App::uses('AppModel', 'Model');

class Trainee extends AppModel {

	//学生一覧ページテーブル用データ
	public function traineeList(){
		$options = array('conditions' => array(
			'Trainee.flag' => 0
			),
			'fields' => array(
				'Trainee.id',
				'Trainee.control_no',
				'Trainee.family_name_en',
				'Trainee.given_name_en',
				'Trainee.sex',
				'Trainee.birthday',
				'Trainee.phone',
				'Trainee.medicalchk_status_id',
				'Trainee.idcard_status_id',
				'Trainee.passport_status_id',
				'Trainee.coe_status_id',
				'Trainee.immigration_status_id',
				'Trainee.labor_ministry_status_id',
				'Trainee.departure_status_id',
				'Trainee.departure_note',
				'Trainee.departure_date',
				'Trainee.return_status_id',
				'Trainee.return_note',
				'Trainee.return_date'
				),
			'order' => array('Trainee.control_no' => 'asc')
		);
		return $this->find('all', $options);
	}

	//Interview Candidate用学生一覧
	public function candidateTraineeList($interview_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.flag'=> 0,
			'Trainee.departure_status_id' => 0,
			);
		$options['fields'] = array(
			'Trainee.id',
			'Trainee.control_no',
			'Trainee.family_name_en',
			'Trainee.given_name_en',
			'Trainee.sex',
			'Trainee.birthday',
			'Trainee.departure_status_id',
			'TraineeProfileImage.trainee_id',
			'TraineeProfileImage.img_file_name',
			'TraineeProfileImage.trainee_control_no',
			'Candidate.id',
			'Candidate.interview_id',
			'Candidate.trainee_id',
			'Candidate.interview_result_id',
			);
		$options['joins'][] = array(
			'table' => 'trainee_profile_images',
			'alias' => 'TraineeProfileImage',
			'type' => 'LEFT',
			'conditions' => 'TraineeProfileImage.trainee_id = Trainee.id'
			);
		$options['joins'][] = array(
			'table' => 'interview_candidates',
			'alias' => 'Candidate',
			'type' => 'LEFT',
			'conditions' => array(
				'Candidate.trainee_id = Trainee.id',
				)
			);
		$options['group'] = array('Trainee.id');
		return $this->find('all', $options);
	}

	//プロフィールページ用職業取得
	public function traineeJob1($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $trainee_id
			);
		$options['fields'] = array(
			'Trainee.id',
			'Trainee.job1_id',
			'Job1.job_jp'
			);
		$options['joins'][] = array(
			'table' => 'jobs',
			'alias' => 'Job1',
			'type' => 'LEFT',
			'conditions' => 'Trainee.job1_id=Job1.id'
			);
		return $this->find('first', $options);
	}
	public function traineeJob2($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $trainee_id
			);
		$options['fields'] = array(
			'Trainee.id',
			'Trainee.job2_id',
			'Job2.job_jp'
			);
		$options['joins'][] = array(
			'table' => 'jobs',
			'alias' => 'Job2',
			'type' => 'LEFT',
			'conditions' => 'Trainee.job2_id=Job2.id'
			);
		return $this->find('first', $options);
	}

	//Profileページ住所用リスト province
	public function dicProvince($province_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.province_id'=> $province_id
			);
		$options['fields'] = array(
			'Trainee.province_id',
			'CamPlaceDic.place_en',
			'CamPlaceDic.place_jp',
			'CamPlaceDic.place_kh'
			);
		$options['joins'][] = array(
			'table' => 'provinces',
			'alias' => 'Province',
			'type' => 'LEFT',
			'conditions' => 'Province.id = Trainee.province_id'
			);
		$options['joins'][] = array(
			'table' => 'cambodia_place_dictionaries',
			'alias' => 'CamPlaceDic',
			'type' => 'LEFT',
			'conditions' => 'CamPlaceDic.place_en = Province.province_en'
			);
		return $this->find('first', $options);
	}
	public function dicDistrict($district_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.District_id'=> $district_id
			);
		$options['fields'] = array(
			'Trainee.district_id',
			'CamPlaceDic.place_en',
			'CamPlaceDic.place_jp',
			'CamPlaceDic.place_kh'
			);
		$options['joins'][] = array(
			'table' => 'districts',
			'alias' => 'District',
			'type' => 'LEFT',
			'conditions' => 'District.id = Trainee.district_id'
			);
		$options['joins'][] = array(
			'table' => 'cambodia_place_dictionaries',
			'alias' => 'CamPlaceDic',
			'type' => 'LEFT',
			'conditions' => 'CamPlaceDic.place_en = District.district_en'
			);
		return $this->find('first', $options);
	}
	public function dicCommune($commune_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.commune_id'=> $commune_id
			);
		$options['fields'] = array(
			'Trainee.Commune_id',
			'CamPlaceDic.place_en',
			'CamPlaceDic.place_jp',
			'CamPlaceDic.place_kh'
			);
		$options['joins'][] = array(
			'table' => 'communes',
			'alias' => 'Commune',
			'type' => 'LEFT',
			'conditions' => 'commune.id = Trainee.commune_id'
			);
		$options['joins'][] = array(
			'table' => 'cambodia_place_dictionaries',
			'alias' => 'CamPlaceDic',
			'type' => 'LEFT',
			'conditions' => 'CamPlaceDic.place_en = Commune.commune_en'
			);
		return $this->find('first', $options);
	}

	//Profileページの書類画像取得
	public function docImgs($trainee_id){

		$options = array();
		$options['conditions'] = array(
			'Trainee.id' => $trainee_id
			);
		$options['fields'] = array(
			'Trainee.id',
			'DocImg.id',
			'DocImg.trainee_id',
			'DocImg.img_file_name',
			'DocImg.doc_name_jp',
			'DocImg.doc_name_en',
			);
		$options['joins'][] = array(
			'table' => 'trainee_documents',
			'alias' => 'DocImg',
			'type' => 'LEFT',
			'conditions' => 'Trainee.id=DocImg.trainee_id'
			);
		return $this->find('all', $options);
	}

	//Profileページ面接結果一覧取得
	public function interviewResults($trainee_id){

		$options = array();
		$options['conditions'] = array(
			'Trainee.id' => $trainee_id
			);
		$options['fields'] = array(
			'Trainee.id',
			'InterviewResult.trainee_id',
			'InterviewResult.interview_id',
			'InterviewResult.interview_result_id',
			'InterviewResult.note',
			'InterviewResultAlias.result_jp',
			'InterviewResultAlias.result_en',
			'Interview.id',
			'Interview.interview_date',
			'Interview.interview_time',
			'Company.company_jp',
			'Company.company_en',
			'Association.association_jp',
			'Association.association_en',
			);
		$options['joins'][] = array(
			'table' => 'interview_candidates',
			'alias' => 'InterviewResult',
			'type' => 'LEFT',
			'conditions' => 'Trainee.id=InterviewResult.trainee_id'
			);
		$options['joins'][] = array(
			'table' => 'interviews',
			'alias' => 'Interview',
			'type' => 'LEFT',
			'conditions' => 'InterviewResult.interview_id = Interview.id'
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'Company',
			'type' => 'LEFT',
			'conditions' => 'Interview.company_id = Company.id'
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Association',
			'type' => 'LEFT',
			'conditions' => 'Company.association_id = Association.id'
			);
		$options['joins'][] = array(
			'table' => 'interview_results',
			'alias' => 'InterviewResultAlias',
			'type' => 'LEFT',
			'conditions' => 'InterviewResult.interview_result_id = InterviewResultAlias.id'
			);
		return $this->find('all', $options);
	}

	//Profileページ学費一覧
	public function expenses($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $trainee_id
			);
		$options['fields'] = array(
			'TraineeExpense.id',
			'TraineeExpense.trainee_id',
			'TraineeExpense.expected_date',
			'TraineeExpense.expected_price',
			'TraineeExpense.pay_date',
			'TraineeExpense.pay_price',
			'TraineeExpense.note'
			);
		$options['joins'][] = array(
			'table' => 'trainee_expenses',
			'alias' => 'TraineeExpense',
			'type' => 'LEFT',
			'conditions' => 'Trainee.id = TraineeExpense.trainee_id'
			);
		$options['order'] = array('TraineeExpense.expected_date' => 'asc');
		return $this->find('all', $options);
	}

	//Profileページマイクロファイナンス
	public function microfinances($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $trainee_id
			);
		$options['fields'] = array(
			'TraineeMicrofinanceRecord.id',
			'TraineeMicrofinanceRecord.trainee_id',
			'TraineeMicrofinanceRecord.pay_month',
			'TraineeMicrofinanceRecord.pay_price',
			'TraineeMicrofinanceRecord.status_id',
			'TraineeMicrofinanceRecord.note'
			);
		$options['joins'][] = array(
			'table' => 'trainee_microfinance_records',
			'alias' => 'TraineeMicrofinanceRecord',
			'type' => 'LEFT',
			'conditions' => 'Trainee.id = TraineeMicrofinanceRecord.trainee_id'
			);
		$options['order'] = array('TraineeMicrofinanceRecord.pay_month' => 'asc');
		return $this->find('all', $options);
	}

	//Profileページマイクロファイナンス画像取得
	public function microfinance_images($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $trainee_id
			);
		$options['fields'] = array(
			'TraineeMicrofinanceImage.img_file_name',
			'TraineeMicrofinanceImage.title',
			'TraineeMicrofinanceImage.id',
			'TraineeMicrofinanceImage.trainee_id'
			);
		$options['joins'][] = array(
			'table' => 'trainee_microfinance_images',
			'alias' => 'TraineeMicrofinanceImage',
			'type' => 'LEFT',
			'conditions' => 'Trainee.id = TraineeMicrofinanceImage.trainee_id'
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
