<?php
App::uses('TraineeClass', 'Model');

/**
 * TraineeClass Test Case
 *
 */
class TraineeClassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.trainee_class'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraineeClass = ClassRegistry::init('TraineeClass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraineeClass);

		parent::tearDown();
	}

}
