<?php
App::uses('CambodiaPlaceDictionary', 'Model');

/**
 * CambodiaPlaceDictionary Test Case
 *
 */
class CambodiaPlaceDictionaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cambodia_place_dictionary'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CambodiaPlaceDictionary = ClassRegistry::init('CambodiaPlaceDictionary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CambodiaPlaceDictionary);

		parent::tearDown();
	}

}
