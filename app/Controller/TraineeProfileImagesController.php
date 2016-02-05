<?php
App::uses('AppController', 'Controller');
/**
 * TraineeProfileImages Controller
 *
 * @property TraineeProfileImage $TraineeProfileImage
 * @property PaginatorComponent $Paginator
 */
class TraineeProfileImagesController extends AppController {

	public $uses = array(
		'Trainee',
		'TraineeProfileImage'
		);

	public $helpers = array(
		'Form',
		'UploadPack.Upload'
		);
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TraineeProfileImage->recursive = 0;
		$this->set('traineeProfileImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraineeProfileImage->exists($id)) {
			throw new NotFoundException(__('Invalid trainee profile image'));
		}
		$options = array('conditions' => array('TraineeProfileImage.' . $this->TraineeProfileImage->primaryKey => $id));
		$this->set('traineeProfileImage', $this->TraineeProfileImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraineeProfileImage->create();

      $trainee_control_no = $this->request->data['TraineeProfileImage']['trainee_control_no'];
      $trainee_id = $this->request->data['TraineeProfileImage']['trainee_id'];

			//元のファイル名の拡張子を残して新しいファイル名にする
			//fileの情報は['name']や['type']など複数の情報があるので注意。
      $org_img_file_name = $this->request->data['TraineeProfileImage']['img']['name'];
      $org_img_file = $this->request->data['TraineeProfileImage']['img'];
      $extension = substr($org_img_file_name, -4);
      $new_img_file_name = $trainee_control_no.$extension;
      $this->request->data['TraineeProfileImage']['img']['name'] = $new_img_file_name;

			if ($this->TraineeProfileImage->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee profile image has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee profile image could not be saved. Please, try again.'));
			}
		}
		$trainees = $this->TraineeProfileImage->Trainee->find('list');
		$this->set(compact('trainees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraineeProfileImage->exists($id)) {
			throw new NotFoundException(__('Invalid trainee profile image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraineeProfileImage->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee profile image has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The trainee profile image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraineeProfileImage.' . $this->TraineeProfileImage->primaryKey => $id));
			$this->request->data = $this->TraineeProfileImage->find('first', $options);
		}
		$trainees = $this->TraineeProfileImage->Trainee->find('list');
		$this->set(compact('trainees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraineeProfileImage->id = $id;
		if (!$this->TraineeProfileImage->exists()) {
			throw new NotFoundException(__('Invalid trainee profile image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TraineeProfileImage->delete()) {
			$this->Session->setFlash(__('The trainee profile image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainee profile image could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
