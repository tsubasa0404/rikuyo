<?php
App::uses('Commune', 'Model');

/**
 * Commune Test Case
 *
 */
class CommuneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commune',
		'app.district',
		'app.province',
		'app.agent',
		'app.trainee'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commune = ClassRegistry::init('Commune');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commune);

		parent::tearDown();
	}

}
