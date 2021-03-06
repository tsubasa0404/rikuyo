<?php
App::uses('District', 'Model');

/**
 * District Test Case
 *
 */
class DistrictTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.district',
		'app.province',
		'app.agent',
		'app.commune',
		'app.trainee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->District = ClassRegistry::init('District');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->District);

		parent::tearDown();
	}

}
