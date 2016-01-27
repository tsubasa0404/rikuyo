<?php
App::uses('AppController', 'Controller');
/**
 * JobMaps Controller
 *
 * @property JobMap $JobMap
 * @property PaginatorComponent $Paginator
 */
class JobMapsController extends AppController {

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
		$this->JobMap->recursive = 0;
		$this->set('jobMaps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobMap->exists($id)) {
			throw new NotFoundException(__('Invalid job map'));
		}
		$options = array('conditions' => array('JobMap.' . $this->JobMap->primaryKey => $id));
		$this->set('jobMap', $this->JobMap->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobMap->create();
			if ($this->JobMap->save($this->request->data)) {
				$this->Session->setFlash(__('The job map has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job map could not be saved. Please, try again.'));
			}
		}
		$companies = $this->JobMap->Company->find('list');
		$jobs = $this->JobMap->Job->find('list');
		$this->set(compact('companies', 'jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JobMap->exists($id)) {
			throw new NotFoundException(__('Invalid job map'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobMap->save($this->request->data)) {
				$this->Session->setFlash(__('The job map has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job map could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobMap.' . $this->JobMap->primaryKey => $id));
			$this->request->data = $this->JobMap->find('first', $options);
		}
		$companies = $this->JobMap->Company->find('list');
		$jobs = $this->JobMap->Job->find('list');
		$this->set(compact('companies', 'jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JobMap->id = $id;
		if (!$this->JobMap->exists()) {
			throw new NotFoundException(__('Invalid job map'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobMap->delete()) {
			$this->Session->setFlash(__('The job map has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job map could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
