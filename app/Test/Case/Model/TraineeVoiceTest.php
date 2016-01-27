<?php
App::uses('TraineeVoice', 'Model');

/**
 * TraineeVoice Test Case
 *
 */
class TraineeVoiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.trainee_voice',
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
		'app.trainee_family',
		'app.trainee_microfinance_image',
		'app.trainee_microfinance_record',
		'app.trainee_phone',
		'app.trainee_profile_image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraineeVoice = ClassRegistry::init('TraineeVoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraineeVoice);

		parent::tearDown();
	}

}
