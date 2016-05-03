<?php
App::uses('AppController', 'Controller');
/**
 * Students Controller
 *
 * @property Trainee $Trainee
 * @property PaginatorComponent $Paginator
 */
class StudentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array(
    'Trainee',
		'Student',
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

		$students = $this->Trainee->studentList();
		$this->set(compact('students'));
	}

}
