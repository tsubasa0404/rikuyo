<?php
App::uses('InterviewResult', 'Model');

/**
 * InterviewResult Test Case
 *
 */
class InterviewResultTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.interview_result',
		'app.interview_candidate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InterviewResult = ClassRegistry::init('InterviewResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InterviewResult);

		parent::tearDown();
	}

}
