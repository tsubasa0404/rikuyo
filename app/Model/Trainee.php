<?php
App::uses('AppModel', 'Model');

class Trainee extends AppModel {

/**
 * Company Profileページ
 * 就業中または失踪中実習生取得
 */
	public function working_trainees($company_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.company_id'=> $company_id,
			'Trainee.departure_status_id' => 1, //出国済み
			'Trainee.return_status_id !=' => 1 //帰国状況、完了ではない
			);
		$options['fields'] = array(
			'Trainee.id',
			'Trainee.control_no',
			'Trainee.family_name_en',
			'Trainee.given_name_en',
			'Trainee.family_name_jp',
			'Trainee.given_name_jp',
			'WorkingTraineeProfileImage.img_file_name',
			'Trainee.departure_status_id',
			'Trainee.departure_date',
			'Trainee.return_status_id',
			'Trainee.return_date'
			);
		$options['recursive'] = -1;
		$options['joins'][] = array(
		'table' => 'trainee_profile_images',
		'alias' => 'WorkingTraineeProfileImage',
		'type' => 'LEFT',
		'conditions' => 'Trainee.id = WorkingTraineeProfileImage.trainee_id'
		);

		return $this->find('all', $options);
	}

	//帰国済み実習生取得
	public function returned_trainees($company_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.company_id'=> $company_id,
			'Trainee.departure_status_id' => 1, //出国済み
			'Trainee.return_status_id ' => 1 //帰国状況、完了
			);
		$options['fields'] = array(
			'Trainee.id',
			'Trainee.control_no',
			'Trainee.family_name_en',
			'Trainee.given_name_en',
			'Trainee.family_name_jp',
			'Trainee.given_name_jp',
			'ReturnedTraineeProfileImage.img_file_name',
			'Trainee.departure_status_id',
			'Trainee.departure_date',
			'Trainee.return_status_id',
			'Trainee.return_date'
			);
		$options['recursive'] = -1;
		$options['joins'][] = array(
		'table' => 'trainee_profile_images',
		'alias' => 'ReturnedTraineeProfileImage',
		'type' => 'LEFT',
		'conditions' => 'Trainee.id = ReturnedTraineeProfileImage.trainee_id'
		);

		return $this->find('all', $options);
	}

/**
 * Remaining Return
 */
	public function remaining_return_trainees(){
		$options = array();
		$options['conditions'] = array(
			'Trainee.departure_status_id '=> 1, //出国状況が、完了である
			'Trainee.return_status_id !='=> 1 //帰国状況が、完了ではない
			);
		$options['fields'] = array(
			'Trainee.id',
			'Trainee.control_no',
			'Trainee.family_name_en',
			'Trainee.given_name_en',
			'Trainee.return_date',
			'Trainee.return_status_id',
			'Trainee.company_id',
			'RemainingReturnCom.company_en',
			'RemainingReturnCom.company_jp',
			'RemainingReturnCom.association_id',
			'RemainingReturnAsso.association_en',
			'RemainingReturnAsso.association_jp',
			'RemainingReturnTraineeProfileImage.img_file_name'
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'RemainingReturnCom',
			'type' => 'LEFT',
			'conditions' => 'RemainingReturnCom.id = Trainee.company_id'
			);
		$options['joins'][] = array(
		'table' => 'associations',
		'alias' => 'RemainingReturnAsso',
		'type' => 'LEFT',
		'conditions' => 'RemainingReturnAsso.id = RemainingReturnCom.association_id'
		);
		$options['joins'][] = array(
		'table' => 'trainee_profile_images',
		'alias' => 'RemainingReturnTraineeProfileImage',
		'type' => 'LEFT',
		'conditions' => 'Trainee.id = RemainingReturnTraineeProfileImage.trainee_id'
		);
		$options['recursive'] = -1;
		$options['order'] = array('Trainee.return_date' => 'asc');
		return $this->find('all', $options);
	}


/**
 * output documentページ
 */
	//output documentページ Trainee情報取得Ajax
	public function getTraineeAjax($trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.id'=> $trainee_id
			);
		$options['fields'] = array(
			'id',
			'family_name_en',
			'family_name_jp',
			'given_name_en',
			'given_name_jp',
			'sex',
			'birthday',
			'Province.province_en',
			'Province.province_jp',
			'OutputDistrict.district_en',
			'OutputCommune.commune_en',
			'address_en',
			'address_jp',
			'married',
			'phone',
			'academic1_en',
			'academic2_en',
			'academic3_en',
			'academic4_en',
			'academic1_jp',
			'academic2_jp',
			'academic3_jp',
			'academic4_jp',
			'academic1_from',
			'academic2_from',
			'academic3_from',
			'academic4_from',
			'academic1_to',
			'academic2_to',
			'academic3_to',
			'academic4_to',
			'employ1_en',
			'employ2_en',
			'employ3_en',
			'employ4_en',
			'employ5_en',
			'employ1_jp',
			'employ2_jp',
			'employ3_jp',
			'employ4_jp',
			'employ5_jp',
			'employ1_from',
			'employ2_from',
			'employ3_from',
			'employ4_from',
			'employ5_from',
			'employ1_to',
			'employ2_to',
			'employ3_to',
			'employ4_to',
			'employ5_to',
			'Job1_id',
			'Job1.job_jp',
			'Job1.job_en',
			'Job1_term',
			'Job2_id',
			'Job2.job_jp',
			'Job2.job_en',
			'Job2_term',
			'english',
			'lang_others_en',
			'lang_others_jp',
			'visit_jpn',
			'visit_jpn_from',
			'visit_jpn_to'
		);
		$options['recursive'] =0;
		$options['joins'][] = array(
		'table' => 'districts',
		'alias' => 'OutputDistrict',
		'type' => 'LEFT',
		'conditions' => 'Trainee.district_id = OutputDistrict.id'
		);
		$options['joins'][] = array(
		'table' => 'communes',
		'alias' => 'OutputCommune',
		'type' => 'LEFT',
		'conditions' => 'Trainee.commune_id = OutputCommune.id'
		);
		$options['joins'][] = array(
		'table' => 'jobs',
		'alias' => 'Job1',
		'type' => 'LEFT',
		'conditions' => 'Trainee.job1_id = Job1.id'
		);
		$options['joins'][] = array(
		'table' => 'jobs',
		'alias' => 'Job2',
		'type' => 'LEFT',
		'conditions' => 'Trainee.job2_id = Job2.id'
		);

		return $this->find('first', $options);
	}

/**
 * Trainee Indexページ
 */
	//index Trainee一覧ページテーブル用データ
	public function traineeList(){
		$options = array();
		$options = array('conditions' => array(
			'Trainee.flag' => 0,
			'Trainee.student_status_id' => 4
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
				'Trainee.student_status_id',
				'Trainee.departure_status_id',
				'Trainee.departure_note',
				'Trainee.departure_date',
				'Trainee.return_status_id',
				'Trainee.return_note',
				'Trainee.return_date',
				'Trainee.birthplace_province_id',
				'TraineeProfileImage.img_file_name'
				),
			'order' => array('Trainee.control_no' => 'asc'),
			'recursive' => -1
		);
		$options['joins'][] = array(
		'table' => 'trainee_profile_images',
		'alias' => 'TraineeProfileImage',
		'type' => 'LEFT',
		'conditions' => 'Trainee.id = TraineeProfileImage.trainee_id'
		);
		return $this->find('all', $options);
	}

/**
 * Student Indexページ
 */
	//student list 学生一覧ページテーブル用データ
	public function studentList(){
		$options = array();
		$options = array('conditions' => array(
			'Trainee.flag' => 0,
			'Trainee.student_status_id !=' => 4 //interviewがPassedでない学生
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
				'TraineeProfileImage.img_file_name',
				'BirthplaceProvince.province_en',
				'BirthplaceProvince.province_jp'
				),
			'order' => array('Trainee.control_no' => 'asc'),
		);
		$options['joins'][] = array(
		'table' => 'provinces',
		'alias' => 'BirthplaceProvince',
		'type' => 'LEFT',
		'conditions' => 'Trainee.birthplace_province_id = BirthplaceProvince.id'
		);
		$options['joins'][] = array(
		'table' => 'trainee_profile_images',
		'alias' => 'TraineeProfileImage',
		'type' => 'LEFT',
		'conditions' => 'Trainee.id = TraineeProfileImage.trainee_id'
		);
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

/**
 * Trainee Addページ
 */
	//add TraineeID取得
	public function getTraineeId($base_trainee_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.control_no LIKE' => '%'.$base_trainee_id.'%'
			);
		$options['group'] = 'Trainee.control_no';
		$options['recursive'] = -1;
		return $this->find('count', $options);
	}

/**
 * Interview Candidate　Selectページ
 */
	//Interview Candidate用学生一覧
	//まだ面接予定者になっていない学生
	public function candidateTraineeList($interview_id){
		$options = array();
		$options['conditions'] = array(
			'Trainee.flag'=> 0,
			'Trainee.departure_status_id' => 0,
			'Trainee.student_status_id !=' => 4, //面接状況がPassedでない
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
				'Candidate.interview_id' => $interview_id
				)
			);
		$options['group'] = array('Trainee.id');
		return $this->find('all', $options);
	}

/**
 * プロフィールページ
 */
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
			'Trainee.commune_id',
			'CamPlaceDic.place_en',
			'CamPlaceDic.place_jp',
			'CamPlaceDic.place_kh'
			);
		$options['joins'][] = array(
			'table' => 'communes',
			'alias' => 'Commune',
			'type' => 'LEFT',
			'conditions' => 'Commune.id = Trainee.commune_id'
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
			'Company.id',
			'Company.company_jp',
			'Company.company_en',
			'Association.id',
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

	public $validate = array(
    'control_no' => array(
      'isUnique' => array(
        'rule' => 'isUnique',
        'message' => 'The Trainee ID already exists.'
        )
      )
  );


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
