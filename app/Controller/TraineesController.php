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
	public $components = array('Paginator');
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
		'CambodiaPlaceDictionary'
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
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'));
			}
		}
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

		if ($this->request->is('post')) {
			$this->Trainee->create();

			if ($this->Trainee->save($this->request->data)) {

				$this->Session->setFlash(__('The trainee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee could not be saved. Please, try again.'));
			}
		}

		$districts = $this->Commune->formatPlacesToJson('district');
		$communes = $this->Commune->formatPlacesToJson('commune');
		$this->set('_serialize', 'districts');
		$this->set('_serialize', 'communes');
		$this->set(compact('districts', 'communes'));

	}


	public function profile($id = null) {
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
				$this->Session->setFlash(__('The Trainee has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The Trainee could not be saved. Please, try again.'));
			}
		} else {

			//不明のSQLが発行されてたのでとりあえず書いてみた。
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
				$this->set(compact('expenses', 'microfinances', 'microfinance_images'));

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
      $this->set(compact('province_en', 'district_en', 'commune_en'));
			//Select2用住所リスト
			$districts = $this->Commune->formatPlacesToJson('district');
			$communes = $this->Commune->formatPlacesToJson('commune');
			$this->set('_serialize', 'districts');
			$this->set('_serialize', 'communes');
			$this->set(compact('districts', 'communes'));

			//TraineeFamily取得
			$trainee_families = $this->TraineeFamily->traineeFamilyList($id);

			//職業取得
			$job1 = $this->Trainee->traineeJob1($id);
			$job2 = $this->Trainee->traineeJob2($id);

			//Voice取得
			$voices = $this->TraineeVoice->find('all', array(
				'fields' => array('id', 'trainee_id', 'title_en', 'voice_en', 'created'),
				'order' => array('created' => 'asc')
				));

			$this->set(compact(
				'option_jobs','option_provinces','option_districts', 'option_communes',
				 'trainee_families', 'lang', 'job1', 'job2', 'prof_img','doc_imgs', 'int_results', 'voices'));
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
				$this->Session->setFlash(__('The trainee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee could not be saved. Please, try again.'));
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
			$this->Session->setFlash(__('The trainee has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
