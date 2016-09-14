<?php
App::uses('AppController', 'Controller');
/**
 * Trainees Controller
 *
 * @property Trainee $Trainee
 * @property PaginatorComponent $Paginator
 */
class TraineesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	public $uses = array(
		'Trainee',
		'TraineeFamily',
		'Job',
		'TraineeProfileImage',
		'TraineeDocument',
		'TraineeExpense',
		'TraineeMicrofinanceImage',
		'TraineeVoice',
		'Province',
		'District',
		'Commune',
		'CambodiaPlaceDictionary',
    'Company'
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$trainees = $this->Trainee->traineeList();
		$this->set(compact('trainees'));
	}

/**
 * index method
 *
 * @return void
 */
  public function remaining_return() {

    $remaining_return_trainees = $this->Trainee->remaining_return_trainees();
    $this->set(compact('remaining_return_trainees'));
  }



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Trainee->exists($id)) {
			throw new NotFoundException(__('Invalid trainee'));
		}
		$options = array('conditions' => array('Trainee.' . $this->Trainee->primaryKey => $id));
		$this->set('trainee', $this->Trainee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Trainee->recursive = -1;
		$this->Commune->recursive = -1;

		$base_trainee_id = "T".date("ymd");
		$trainee_idx = $this->Trainee->getTraineeId($base_trainee_id)+1;
		$control_no = $base_trainee_id.sprintf('%02d', $trainee_idx);

		$this->set(compact('base_trainee_id', 'control_no'));

		if ($this->request->is('post')) {
			$this->Trainee->create();

			if ($this->Trainee->save($this->request->data)) {

				$this->Session->setFlash(__('The trainee has been saved.'), 'success_flash');
				return $this->redirect(array('controller' => 'students', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee could not be saved. Please, try again.'), 'error_flash');
			}
		}
    $provinces = $this->Province->find('list', array('fields' => array('id', 'province_en')));
		$districts = $this->District->formatPlacesToJsonForAddCommune('district');
		$communes = $this->Commune->formatPlacesToJson('commune');
		$this->set('_serialize', 'districts');
		$this->set('_serialize', 'communes');
		$this->set(compact('districts', 'communes', 'provinces'));

	}

	public function profile($id = null) {
    $user = $this->Auth->user();

		if (!$this->Trainee->exists($id)) {
			throw new NotFoundException(__('Invalid Trainee'));
		}

		//投稿処理
		if ($this->request->is(array('post', 'put'))) {

			//visit_jpnがNoだったときFromとToを削除
			if($this->request->data['Trainee']['visit_jpn']){
				if($this->request->data['Trainee']['visit_jpn'] == 0){
					$this->request->data['Trainee']['visit_jpn_from'] = "";
					$this->request->data['Trainee']['visit_jpn_to'] = "";
				}
			}

			if ($this->Trainee->save($this->request->data)) {
				$this->Session->setFlash(__('The Trainee has been saved.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The Trainee could not be saved. Please, try again.'), 'error_flash');
			}
		} else {

			$this->Trainee->recursive = -1;
			$this->Province->recursive = -1;
			$this->District->recursive = -1;
			$this->Commune->recursive = -1;

			//Profileページ 出力処理
			//Job 言語切り替え
			$lang = $this->__setLang();
			//学生データ全取得
			$options = array('conditions' => array('Trainee.' . $this->Trainee->primaryKey => $id));
			$this->request->data = $this->Trainee->find('first', $options);

				//プロフ画像取得
				$prof_img = $this->TraineeProfileImage->profImg($id);
				//書類画像取得
				$doc_imgs = $this->Trainee->docImgs($id);
				//面接結果取得
				$int_results = $this->Trainee->interviewResults($id);
				//学費入金記録取得
				$expenses = $this->Trainee->expenses($id);
				//マイクロファイナンス入金記録
				$microfinances = $this->Trainee->microfinances($id);
				//マイクロファイナンス画像取得
				$microfinance_images = $this->Trainee->microfinance_images($id);


      //各Form用オプション取得
      //$langに応じて出力切り替え
      //職業一覧
      $option_jobs = $this->Job->optionJobs($lang);


      //住所用一覧
      $option_provinces = $this->Province->optionProvince();
      $option_districts = $this->District->optionDistrict();
      $option_communes  = $this->Commune->optionCommune();
      $province_en      = $this->Trainee->dicProvince($this->request->data['Trainee']['province_id']);
      $district_en      = $this->Trainee->dicDistrict($this->request->data['Trainee']['district_id']);
      $commune_en       = $this->Trainee->dicCommune($this->request->data['Trainee']['commune_id']);
      //Select2用住所リスト
      $districts = $this->Commune->formatPlacesToJson('district');
      $communes = $this->Commune->formatPlacesToJson('commune');
      $this->set('_serialize', 'districts');
      $this->set('_serialize', 'communes');

      //TraineeFamily取得
      $trainee_families = $this->TraineeFamily->traineeFamilyList($id);

      //職業取得
      $job1 = $this->Trainee->traineeJob1($id);
      $job2 = $this->Trainee->traineeJob2($id);

      //企業一覧取得
      $option_companies = $this->Company->__optionComAso($lang);

      //Voice取得
      $voices = $this->TraineeVoice->find('all', array(
        'fields' => array('id', 'trainee_id', 'title_en', 'voice_en', 'created'),
        'order' => array('created' => 'asc'),
        'conditions' => array('trainee_id' => $id)
        ));

      if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 3){

      $this->set(compact('expenses', 'microfinances', 'microfinance_images'));
      $this->set(compact('province_en', 'district_en', 'commune_en'));
      $this->set(compact(
        'option_jobs','option_provinces','option_districts', 'option_communes','option_companies',
         'trainee_families', 'lang', 'job1', 'job2', 'prof_img','doc_imgs', 'int_results', 'voices'));
      }

      if($user['role_id'] == 4){ //finance

        $this->set(compact('expenses', 'microfinances', 'microfinance_images', 'lang', 'prof_img', 'voices'));
        $this->render('profile_finance');

      } else if($user['role_id'] == 5){ //receptionist

        $this->set(compact('province_en', 'district_en', 'commune_en',
          'option_jobs', 'option_provinces','option_districts', 'option_communes','option_companies',
          'trainee_families', 'lang', 'job1', 'job2', 'prof_img','doc_imgs', 'int_results', 'voices'));
        $this->render('profile_receptionist');

      } else if($user['role_id'] == 6){ //processor

        $this->set(compact('lang', 'prof_img', 'doc_imgs', 'voices','option_companies','option_jobs'));
        $this->render('profile_processor');

      }


		}


	}

	public function updateFlightAjax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']                  = $id;
        $this->request->data['Trainee']['company_id']          = $_POST['company_id'];
        $this->request->data['Trainee']['interview_date']      = $_POST['interview_date'];
        $this->request->data['Trainee']['departure_date']      = $_POST['departure_date'];
        $this->request->data['Trainee']['departure_status_id'] = $_POST['departure_status_id'];
        $this->request->data['Trainee']['return_date']         = $_POST['return_date'];
        $this->request->data['Trainee']['return_status_id']    = $_POST['return_status_id'];
        if(isset($_POST['student_status_id'])){
          $this->request->data['Trainee']['student_status_id']   = $_POST['student_status_id'];
        }
        $job_array = implode(',', $_POST['trainee_job']);
        $this->request->data['Trainee']['trainee_job'] = $job_array;
		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

  public function updateInterviewStatusAjax($id=null){
      $this->autoRender = false;
      if($this->RequestHandler->isAjax()){
        Configure::write('debug', 0);
       }
      if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']                  = $id;
        $this->request->data['Trainee']['student_status_id']   = $_POST['student_status_id'];
        if ($this->Trainee->save($this->request->data)) {
          return true; //戻り値を空にするとエラーでる。
        } else {
          return false;
        }
      }
  }

	public function updateDocChkAjax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']                       = $id;
        $this->request->data['Trainee']['medicalchk_status_id']     = $_POST['medicalchk_status_id'];
        $this->request->data['Trainee']['medicalchk_note']          = $_POST['medicalchk_note'];
        $this->request->data['Trainee']['idcard_status_id']         = $_POST['idcard_status_id'];
        $this->request->data['Trainee']['idcard_note']              = $_POST['idcard_note'];
        $this->request->data['Trainee']['fb']                       = $_POST['fb'];
        $this->request->data['Trainee']['rb']                       = $_POST['rb'];
        $this->request->data['Trainee']['cb']                       = $_POST['cb'];
        $this->request->data['Trainee']['passport_status_id']       = $_POST['passport_status_id'];
        $this->request->data['Trainee']['passport_note']            = $_POST['passport_note'];
        $this->request->data['Trainee']['coe_status_id']            = $_POST['coe_status_id'];
        $this->request->data['Trainee']['coe_note']                 = $_POST['coe_note'];
        $this->request->data['Trainee']['immigration_status_id']    = $_POST['immigration_status_id'];
        $this->request->data['Trainee']['immigration_note']         = $_POST['immigration_note'];
        $this->request->data['Trainee']['labor_ministry_status_id'] = $_POST['labor_ministry_status_id'];
        $this->request->data['Trainee']['labor_ministry_note']      = $_POST['labor_ministry_note'];
        $this->request->data['Trainee']['bank_status_id']           = $_POST['bank_status_id'];
        $this->request->data['Trainee']['bank_note']                = $_POST['bank_note'];
        $this->request->data['Trainee']['sign_status_id']           = $_POST['sign_status_id'];
        $this->request->data['Trainee']['sign_note']                = $_POST['sign_note'];
        $this->request->data['Trainee']['note']                     = $_POST['remark'];

		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

	public function updateBasicAjax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']                     = $id;
        $this->request->data['Trainee']['id_number']              = $_POST['id_number'];
        $this->request->data['Trainee']['date_in']                = $_POST['date_in'];
        $this->request->data['Trainee']['family_name_jp']         = $_POST['family_name_jp'];
        $this->request->data['Trainee']['family_name_en']         = $_POST['family_name_en'];
        $this->request->data['Trainee']['given_name_en']          = $_POST['given_name_en'];
        $this->request->data['Trainee']['given_name_jp']          = $_POST['given_name_jp'];
        $this->request->data['Trainee']['family_name_kh']         = $_POST['family_name_kh'];
        $this->request->data['Trainee']['given_name_kh']          = $_POST['given_name_kh'];
        $this->request->data['Trainee']['introduced_from']        = $_POST['introduced_from'];
        $this->request->data['Trainee']['sex']                    = $_POST['sex'];
        $this->request->data['Trainee']['birthday']               = $_POST['birthday'];
        $this->request->data['Trainee']['married']                = $_POST['married'];
        $this->request->data['Trainee']['brother_cnt']            = $_POST['brother_cnt'];
        $this->request->data['Trainee']['brother_index']          = $_POST['brother_index'];
        $this->request->data['Trainee']['birthplace_province_id'] = $_POST['birthplace_province_id'];
        $this->request->data['Trainee']['address_jp']             = $_POST['address_jp'];
        $this->request->data['Trainee']['district_part_jp']       = $_POST['district_part_jp'];
        $this->request->data['Trainee']['province_id']            = $_POST['province_id'];
        $this->request->data['Trainee']['district_id']            = $_POST['district_id'];
        $this->request->data['Trainee']['commune_id']             = $_POST['commune_id'];
        $this->request->data['Trainee']['address_en']             = $_POST['address_en'];
        $this->request->data['Trainee']['district_part_en']       = $_POST['district_part_en'];
        $this->request->data['Trainee']['address_kh']             = $_POST['address_kh'];
        $this->request->data['Trainee']['phone']                  = $_POST['phone'];
        $this->request->data['Trainee']['lang_others_jp']         = $_POST['lang_others_jp'];
        $this->request->data['Trainee']['english']                = $_POST['english'];
        $this->request->data['Trainee']['lang_others_en']         = $_POST['lang_others_en'];
        $this->request->data['Trainee']['facebook']               = $_POST['facebook'];

		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

	public function updatePersonalityAjax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']                    = $id;
        $this->request->data['Trainee']['height']                = $_POST['height'];
        $this->request->data['Trainee']['weight']                = $_POST['weight'];
        $this->request->data['Trainee']['shoe_size']             = $_POST['shoe_size'];
        $this->request->data['Trainee']['handed']                = $_POST['handed'];
        $this->request->data['Trainee']['eyesight_left']         = $_POST['eyesight_left'];
        $this->request->data['Trainee']['eyesight_right']        = $_POST['eyesight_right'];
        $this->request->data['Trainee']['color_blindness']       = $_POST['color_blindness'];
        $this->request->data['Trainee']['blood_type']            = $_POST['blood_type'];
        $this->request->data['Trainee']['tatoo']                 = $_POST['tatoo'];
        $this->request->data['Trainee']['tabacco']               = $_POST['tabacco'];
        $this->request->data['Trainee']['drink']                 = $_POST['drink'];
        $this->request->data['Trainee']['experience_group_life'] = $_POST['experience_group_life'];


		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

	public function updatePersonality2Ajax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']              = $id;
        $this->request->data['Trainee']['face_feature_jp'] = $_POST['face_feature_jp'];
        $this->request->data['Trainee']['face_feature_en'] = $_POST['face_feature_en'];
        $this->request->data['Trainee']['health_jp']       = $_POST['health_jp'];
        $this->request->data['Trainee']['health_en']       = $_POST['health_en'];
        $this->request->data['Trainee']['good_point_jp']   = $_POST['good_point_jp'];
        $this->request->data['Trainee']['good_point_en']   = $_POST['good_point_en'];
        $this->request->data['Trainee']['bad_point_jp']    = $_POST['bad_point_jp'];
        $this->request->data['Trainee']['bad_point_en']    = $_POST['bad_point_en'];
        $this->request->data['Trainee']['hobby_jp']        = $_POST['hobby_jp'];
        $this->request->data['Trainee']['hobby_en']        = $_POST['hobby_en'];
        $this->request->data['Trainee']['character_jp']    = $_POST['character_jp'];
        $this->request->data['Trainee']['character_en']    = $_POST['character_en'];
        $this->request->data['Trainee']['specialty_jp']    = $_POST['specialty_jp'];
        $this->request->data['Trainee']['specialty_en']    = $_POST['specialty_en'];
        $this->request->data['Trainee']['religious_jp']    = $_POST['religious_jp'];
        $this->request->data['Trainee']['religious_en']    = $_POST['religious_en'];


		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

	public function updateCareerAjax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']              = $id;
        $this->request->data['Trainee']['academic1_jp']     = $_POST['academic1_jp'];
        $this->request->data['Trainee']['academic1_from']   = $_POST['academic1_from'];
        $this->request->data['Trainee']['academic1_to']     = $_POST['academic1_to'];
        $this->request->data['Trainee']['academic1_en']     = $_POST['academic1_en'];
        $this->request->data['Trainee']['employ1_jp']       = $_POST['employ1_jp'];
        $this->request->data['Trainee']['employ1_salary']   = $_POST['employ1_salary'];
        $this->request->data['Trainee']['employ1_job']      = $_POST['employ1_job'];
        $this->request->data['Trainee']['employ1_from']     = $_POST['employ1_from'];
        $this->request->data['Trainee']['employ1_to']       = $_POST['employ1_to'];
        $this->request->data['Trainee']['employ1_en']       = $_POST['employ1_en'];
        $this->request->data['Trainee']['academic2_jp']     = $_POST['academic2_jp'];
        $this->request->data['Trainee']['academic2_from']   = $_POST['academic2_from'];
        $this->request->data['Trainee']['academic2_to']     = $_POST['academic2_to'];
        $this->request->data['Trainee']['academic2_en']     = $_POST['academic2_en'];
        $this->request->data['Trainee']['employ2_jp']       = $_POST['employ2_jp'];
        $this->request->data['Trainee']['employ2_salary']   = $_POST['employ2_salary'];
        $this->request->data['Trainee']['employ2_job']      = $_POST['employ2_job'];
        $this->request->data['Trainee']['employ2_from']     = $_POST['employ2_from'];
        $this->request->data['Trainee']['employ2_to']       = $_POST['employ2_to'];
        $this->request->data['Trainee']['employ2_en']       = $_POST['employ2_en'];
        $this->request->data['Trainee']['academic3_jp']     = $_POST['academic3_jp'];
        $this->request->data['Trainee']['academic3_from']   = $_POST['academic3_from'];
        $this->request->data['Trainee']['academic3_to']     = $_POST['academic3_to'];
        $this->request->data['Trainee']['academic3_en']     = $_POST['academic3_en'];
        $this->request->data['Trainee']['employ3_jp']       = $_POST['employ3_jp'];
        $this->request->data['Trainee']['employ3_salary']   = $_POST['employ3_salary'];
        $this->request->data['Trainee']['employ3_job']      = $_POST['employ3_job'];
        $this->request->data['Trainee']['employ3_from']     = $_POST['employ3_from'];
        $this->request->data['Trainee']['employ3_to']       = $_POST['employ3_to'];
        $this->request->data['Trainee']['employ3_en']       = $_POST['employ3_en'];
        $this->request->data['Trainee']['academic4_jp']     = $_POST['academic4_jp'];
        $this->request->data['Trainee']['academic4_from']   = $_POST['academic4_from'];
        $this->request->data['Trainee']['academic4_to']     = $_POST['academic4_to'];
        $this->request->data['Trainee']['academic4_en']     = $_POST['academic4_en'];
        $this->request->data['Trainee']['employ4_jp']       = $_POST['employ4_jp'];
        $this->request->data['Trainee']['employ4_salary']   = $_POST['employ4_salary'];
        $this->request->data['Trainee']['employ4_job']      = $_POST['employ4_job'];
        $this->request->data['Trainee']['employ4_from']     = $_POST['employ4_from'];
        $this->request->data['Trainee']['employ4_to']       = $_POST['employ4_to'];
        $this->request->data['Trainee']['employ4_en']       = $_POST['employ4_en'];
        $this->request->data['Trainee']['employ5_jp']       = $_POST['employ5_jp'];
        $this->request->data['Trainee']['employ5_salary']   = $_POST['employ5_salary'];
        $this->request->data['Trainee']['employ5_job']      = $_POST['employ5_job'];
        $this->request->data['Trainee']['employ5_from']     = $_POST['employ5_from'];
        $this->request->data['Trainee']['employ5_to']       = $_POST['employ5_to'];
        $this->request->data['Trainee']['employ5_en']       = $_POST['employ5_en'];
        $this->request->data['Trainee']['latest_academic_history']       = $_POST['latest_academic_history'];

        $job_array = implode(',', $_POST['job_expectation']);
        $this->request->data['Trainee']['job_expectation'] = $job_array;

        $this->request->data['Trainee']['job1_id']          = $_POST['job1_id'];
        $this->request->data['Trainee']['job1_term']        = $_POST['job1_term'];
        $this->request->data['Trainee']['job2_id']          = $_POST['job2_id'];
        $this->request->data['Trainee']['job2_term']        = $_POST['job2_term'];
        if($_POST['visit_jpn'] && $_POST['visit_jpn'] == 0){
        	$this->request->data['Trainee']['visit_jpn_from']   = "";
        	$this->request->data['Trainee']['visit_jpn_to']     = "";
        } else {
	        $this->request->data['Trainee']['visit_jpn_from']   = $_POST['visit_jpn_from'];
	        $this->request->data['Trainee']['visit_jpn_to']     = $_POST['visit_jpn_to'];
        }


		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

	public function updateOthersAjax($id=null){
		  $this->autoRender = false;
		  if($this->RequestHandler->isAjax()){
		    Configure::write('debug', 0);
		   }
		  if($this->request->is('ajax')){
        $this->request->data['Trainee']['id']                            = $id;
        $this->request->data['Trainee']['purpose_jp']                    = $_POST['purpose_jp'];
        $this->request->data['Trainee']['purpose_en']                    = $_POST['purpose_en'];
        $this->request->data['Trainee']['family_in_jpn']                 = $_POST['family_in_jpn'];
        $this->request->data['Trainee']['family_in_jpn_relationship_en'] = $_POST['family_in_jpn_relationship_en'];
        $this->request->data['Trainee']['plan_after_return_jp']          = $_POST['plan_after_return_jp'];
        $this->request->data['Trainee']['plan_after_return_en']          = $_POST['plan_after_return_en'];
        $this->request->data['Trainee']['saving_money']                  = $_POST['saving_money'];
        $this->request->data['Trainee']['status_after_return_jp']        = $_POST['status_after_return_jp'];
        $this->request->data['Trainee']['status_after_return_en']        = $_POST['status_after_return_en'];

		    if ($this->Trainee->save($this->request->data)) {
		    	return true; //戻り値を空にするとエラーでる。
		    } else {
		    	return false;
		    }
		  }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Trainee->exists($id)) {
			throw new NotFoundException(__('Invalid trainee'));
		}
		if ($this->request->is(array('post', 'put'))) {

			if ($this->Trainee->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee could not be saved. Please, try again.'), 'error_flash');
			}
		} else {
			$options = array('conditions' => array('Trainee.' . $this->Trainee->primaryKey => $id));
			$this->request->data = $this->Trainee->find('first', $options);
		}
    $provinces           = $this->Trainee->Province->find('list');
    $districts           = $this->Trainee->District->find('list');
    $communes            = $this->Trainee->Commune->find('list');
    $classes             = $this->Trainee->Class->find('list');
		$this->set(compact('provinces', 'districts', 'communes',  'classes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Trainee->id = $id;
		if (!$this->Trainee->exists()) {
			throw new NotFoundException(__('Invalid trainee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Trainee->delete()) {
			$this->Session->setFlash(__('The trainee has been deleted.'), 'success_flash');
		} else {
			$this->Session->setFlash(__('The trainee could not be deleted. Please, try again.'), 'error_flash');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function update_delete_flag($id = null){
		if(!$this->Trainee->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Trainee->save($this->request->data)){
				$this->Session->setFlash(__('The trainee has been deleted.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'));
			}
		}
	}
}
