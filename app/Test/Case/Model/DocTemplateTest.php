<?php
App::uses('DocTemplate', 'Model');

/**
 * DocTemplate Test Case
 *
 */
class DocTemplateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doc_template',
		'app.document_name',
		'app.output_document'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocTemplate = ClassRegistry::init('DocTemplate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocTemplate);

		parent::tearDown();
	}

}
