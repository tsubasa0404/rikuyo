<?php
App::uses('AppController', 'Controller');
/**
 * SectorMaps Controller
 *
 * @property SectorMap $SectorMap
 * @property PaginatorComponent $Paginator
 */
class SectorMapsController extends AppController {

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
		$this->SectorMap->recursive = 0;
		$this->set('sectorMaps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SectorMap->exists($id)) {
			throw new NotFoundException(__('Invalid sector map'));
		}
		$options = array('conditions' => array('SectorMap.' . $this->SectorMap->primaryKey => $id));
		$this->set('sectorMap', $this->SectorMap->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SectorMap->create();
			if ($this->SectorMap->save($this->request->data)) {
				$this->Session->setFlash(__('The sector map has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sector map could not be saved. Please, try again.'));
			}
		}
		$associations = $this->SectorMap->Association->find('list');
		$sectors = $this->SectorMap->Sector->find('list');
		$this->set(compact('associations', 'sectors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SectorMap->exists($id)) {
			throw new NotFoundException(__('Invalid sector map'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SectorMap->save($this->request->data)) {
				$this->Session->setFlash(__('The sector map has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sector map could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SectorMap.' . $this->SectorMap->primaryKey => $id));
			$this->request->data = $this->SectorMap->find('first', $options);
		}
		$associations = $this->SectorMap->Association->find('list');
		$sectors = $this->SectorMap->Sector->find('list');
		$this->set(compact('associations', 'sectors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SectorMap->id = $id;
		if (!$this->SectorMap->exists()) {
			throw new NotFoundException(__('Invalid sector map'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SectorMap->delete()) {
			$this->Session->setFlash(__('The sector map has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sector map could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
