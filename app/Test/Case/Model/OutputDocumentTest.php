<?php
App::uses('OutputDocument', 'Model');

/**
 * OutputDocument Test Case
 *
 */
class OutputDocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.output_document',
		'app.doc_template'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OutputDocument = ClassRegistry::init('OutputDocument');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OutputDocument);

		parent::tearDown();
	}

}
