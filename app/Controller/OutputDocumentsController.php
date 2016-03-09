<?php
App::uses('AppController', 'Controller');
/**
 * OutputDocuments Controller
 *
 * @property OutputDocument $OutputDocument
 * @property PaginatorComponent $Paginator
 */
class OutputDocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array(
		'OutputDocument',
		'DocName',
		'Interview',
		'Trainee',
		'Association',
		'Agent',
		'Company',
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OutputDocument->recursive = 0;
		$this->set('outputDocuments', $this->Paginator->paginate());
	}

	public function doc_list($interview_id ) {
		$this->OutputDocument->recursive = -1;

		$interview_prof = $this->Interview->printProf($interview_id);
		$documents_list = $this->OutputDocument->find('all');

		$this->set(compact('interview_prof', 'documents_list'));
	}

	public function printout($interview_id, $ctp_name){
		$interview_prof = $this->Interview->printProf($interview_id);
		$agent = $this->Agent->find('all', array('conditions' => array('Agent.id' => $interview_prof[0]['Interview']['agent_id'])));
		$this->set(compact('interview_prof', 'agent'));
		$this->render($ctp_name);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OutputDocument->exists($id)) {
			throw new NotFoundException(__('Invalid output document'));
		}
		$options = array('conditions' => array('OutputDocument.' . $this->OutputDocument->primaryKey => $id));
		$this->set('outputDocument', $this->OutputDocument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OutputDocument->create();
			if ($this->OutputDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The output document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The output document could not be saved. Please, try again.'));
			}
		}
		$docTemplates = $this->OutputDocument->DocTemplate->find('list');
		$this->set(compact('docTemplates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OutputDocument->exists($id)) {
			throw new NotFoundException(__('Invalid output document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OutputDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The output document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The output document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OutputDocument.' . $this->OutputDocument->primaryKey => $id));
			$this->request->data = $this->OutputDocument->find('first', $options);
		}
		$docTemplates = $this->OutputDocument->DocTemplate->find('list');
		$this->set(compact('docTemplates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OutputDocument->id = $id;
		if (!$this->OutputDocument->exists()) {
			throw new NotFoundException(__('Invalid output document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OutputDocument->delete()) {
			$this->Session->setFlash(__('The output document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The output document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
