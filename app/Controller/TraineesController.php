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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Trainee->recursive = 0;
		$this->set('trainees', $this->Paginator->paginate());
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
		if ($this->request->is('post')) {
			$this->Trainee->create();
			if ($this->Trainee->save($this->request->data)) {
				$this->Session->setFlash(__('The trainee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trainee could not be saved. Please, try again.'));
			}
		}
		$provinces = $this->Trainee->Province->find('list');
		$districts = $this->Trainee->District->find('list');
		$communes = $this->Trainee->Commune->find('list');
		$birthplaceProvinces = $this->Trainee->BirthplaceProvince->find('list');
		$birthplaceDistricts = $this->Trainee->BirthplaceDistrict->find('list');
		$birthplaceCommunes = $this->Trainee->BirthplaceCommune->find('list');
		$job1s = $this->Trainee->Job1->find('list');
		$job2s = $this->Trainee->Job2->find('list');
		$medicalchkStatuses = $this->Trainee->MedicalchkStatus->find('list');
		$idcardStatuses = $this->Trainee->IdcardStatus->find('list');
		$passportStatuses = $this->Trainee->PassportStatus->find('list');
		$coeStatuses = $this->Trainee->CoeStatus->find('list');
		$immigrationStatuses = $this->Trainee->ImmigrationStatus->find('list');
		$laborMinistryStatuses = $this->Trainee->LaborMinistryStatus->find('list');
		$departureStatuses = $this->Trainee->DepartureStatus->find('list');
		$returnStatuses = $this->Trainee->ReturnStatus->find('list');
		$classes = $this->Trainee->TraineeClass->find('list');
		$this->set(compact('provinces', 'districts', 'communes', 'birthplaceProvinces', 'birthplaceDistricts', 'birthplaceCommunes', 'job1s', 'job2s', 'medicalchkStatuses', 'idcardStatuses', 'passportStatuses', 'coeStatuses', 'immigrationStatuses', 'laborMinistryStatuses', 'departureStatuses', 'returnStatuses', 'classes'));
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
		$provinces = $this->Trainee->Province->find('list');
		$districts = $this->Trainee->District->find('list');
		$communes = $this->Trainee->Commune->find('list');
		$birthplaceProvinces = $this->Trainee->BirthplaceProvince->find('list');
		$birthplaceDistricts = $this->Trainee->BirthplaceDistrict->find('list');
		$birthplaceCommunes = $this->Trainee->BirthplaceCommune->find('list');
		$job1s = $this->Trainee->Job1->find('list');
		$job2s = $this->Trainee->Job2->find('list');
		$medicalchkStatuses = $this->Trainee->MedicalchkStatus->find('list');
		$idcardStatuses = $this->Trainee->IdcardStatus->find('list');
		$passportStatuses = $this->Trainee->PassportStatus->find('list');
		$coeStatuses = $this->Trainee->CoeStatus->find('list');
		$immigrationStatuses = $this->Trainee->ImmigrationStatus->find('list');
		$laborMinistryStatuses = $this->Trainee->LaborMinistryStatus->find('list');
		$departureStatuses = $this->Trainee->DepartureStatus->find('list');
		$returnStatuses = $this->Trainee->ReturnStatus->find('list');
		$classes = $this->Trainee->Class->find('list');
		$this->set(compact('provinces', 'districts', 'communes', 'birthplaceProvinces', 'birthplaceDistricts', 'birthplaceCommunes', 'job1s', 'job2s', 'medicalchkStatuses', 'idcardStatuses', 'passportStatuses', 'coeStatuses', 'immigrationStatuses', 'laborMinistryStatuses', 'departureStatuses', 'returnStatuses', 'classes'));
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
