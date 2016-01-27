<?php
App::uses('StatusList', 'Model');

/**
 * StatusList Test Case
 *
 */
class StatusListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status_list'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StatusList = ClassRegistry::init('StatusList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StatusList);

		parent::tearDown();
	}

}
