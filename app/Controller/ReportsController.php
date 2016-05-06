<?php
App::uses('AppController', 'Controller');
/**
 * Agents Controller
 *
 * @property Agent $Agent
 * @property PaginatorComponent $Paginator
 */
class ReportsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array(
		'Agent',
		'Sector',
		'Province',
		'District',
		'Commune',
		'Trainee',
		'Interview',
		'InterviewCandidate',
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {


		//現在の年に面接合格した人を月ごとに取得
		$passed_trainees_total_list = $this->InterviewCandidate->passed_trainees_total_list(date('Y'));
		//Hashで整形
		$passed_trainees_total_list_format = Hash::combine($passed_trainees_total_list, '{n}.{n}.YM', '{n}.{n}');

		//取得したデータから、年間の面接合格者数を計算するHelperを使用。
		App::uses('HlpReportHelper', 'View/Helper');
		$this->HlpReport = new HlpReportHelper(new View());
		$sum_passed_trainees = $this->HlpReport->sum_passed_trainees($passed_trainees_total_list_format);

		//グラフ用にデータを整形するHelperを使用
		$passed_trainees_graph_data =
			$this->HlpReport->passed_trainees_graph_data($passed_trainees_total_list_format);
		//取得したグラフ用の配列を文字列に変換
		$passed_trainees_graph_data_to_str = implode(",", $passed_trainees_graph_data);

		//passed_trainees_graph_dataの配列を整形して、
		//表用にデータを作る。
		$passed_trainees_graph_data_to_list_format =
			$this->HlpReport->graph_data_to_list_format($passed_trainees_graph_data);

		$this->set(compact('passed_trainees_total_list', 'passed_trainees_total_list_format', 'sum_passed_trainees', 'passed_trainees_graph_data','passed_trainees_graph_data_to_str'));
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
		$this->set('agent', $this->Agent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$lang = $this->__setLang();
		$option_sectors = $this->Sector->optionSectors($lang);

		$districts = $this->Commune->formatPlacesToJson('district');
		$communes = $this->Commune->formatPlacesToJson('commune');

		$this->set('_serialize', 'districts');
		$this->set('_serialize', 'communes');
		$this->set(compact('option_sectors','districts', 'communes', 'lang'));

		if ($this->request->is('post')) {
			if($this->request->data['Agent']['sector']){
				$sector_array = implode(',', $this->request->data['Agent']['sector']);
				$this->request->data['Agent']['sector'] = $sector_array;
			}
			$this->Agent->create();

			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'), 'success_flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

	public function update() {

		if ($this->request->is('post')) {
			if( $this->request->data['Agent']['sector']){
				$sector_array = implode(',', $this->request->data['Agent']['sector']);
				$this->request->data['Agent']['sector'] = $sector_array;
			}


			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been changed.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'), 'error_flash');
			}
		}
	}

/**
 * [profile description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
	public function profile($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid Agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The Agent has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The Agent could not be saved. Please, try again.'));
			}
		} else {
			$this->Province->recursive = -1;
			$this->District->recursive = -1;
			$this->Commune->recursive = -1;

			$lang = $this->__setLang();
			$option_sectors = $this->Sector->optionSectors($lang);
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$option_provinces = $this->Province->optionProvince();
      $option_districts = $this->District->optionDistrict();
      $option_communes  = $this->Commune->optionCommune();
			$this->request->data = $this->Agent->find('first', $options);
			$this->set(compact('option_sectors', 'option_provinces', 'option_districts', 'option_communes', 'lang'));

			//Select2用住所リスト
			$districts = $this->Commune->formatPlacesToJson('district');
			$communes = $this->Commune->formatPlacesToJson('commune');
			$this->set('_serialize', 'districts');
			$this->set('_serialize', 'communes');
			$this->set(compact('districts', 'communes'));
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
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
		}
		$provinces = $this->Agent->Province->find('list');
		$districts = $this->Agent->District->find('list');
		$communes = $this->Agent->Commune->find('list');
		$this->set(compact('provinces', 'districts', 'communes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agent->id = $id;
		if (!$this->Agent->exists()) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Agent->delete()) {
			$this->Session->setFlash(__('The agent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

		public function update_delete_flag($id = null){
		if(!$this->Agent->exists($id)){
			throw new NotFoundException(__('You cannot delete this'));
		}
		if($this->request->is(array('post', 'put'))){
			$this->request->data = array(
				'id' => $id,
				'flag' => '1'
				);
			if($this->Agent->save($this->request->data)){
				$this->Session->setFlash(__('The agent has been deleted.'), 'success_flash');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('You cannot delete this.'), 'error_flash');
			}
		}
	}

}
