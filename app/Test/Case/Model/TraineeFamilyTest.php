<?php
App::uses('TraineeFamily', 'Model');

/**
 * TraineeFamily Test Case
 *
 */
class TraineeFamilyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.trainee_family',
		'app.trainee',
		'app.province',
		'app.agent',
		'app.district',
		'app.commune',
		'app.job',
		'app.status_list',
		'app.trainee_class',
		'app.interview_candidate',
		'app.interview',
		'app.company',
		'app.association',
		'app.association_document',
		'app.doc_name',
		'app.doc_folder',
		'app.sub_folder',
		'app.interview_doc_status_list',
		'app.inspection',
		'app.interview_result',
		'app.trainee_document',
		'app.trainee_expense',
		'app.trainee_microfinance_image',
		'app.trainee_microfinance_record',
		'app.trainee_phone',
		'app.trainee_profile_image',
		'app.trainee_voice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraineeFamily = ClassRegistry::init('TraineeFamily');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraineeFamily);

		parent::tearDown();
	}

}
