<?php
App::uses('DocFolder', 'Model');

/**
 * DocFolder Test Case
 *
 */
class DocFolderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doc_folder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocFolder = ClassRegistry::init('DocFolder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocFolder);

		parent::tearDown();
	}

}
