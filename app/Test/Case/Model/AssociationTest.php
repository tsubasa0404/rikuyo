<?php
App::uses('Association', 'Model');

/**
 * Association Test Case
 *
 */
class AssociationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.association',
		'app.association_document',
		'app.doc_name',
		'app.interview_doc_status_list',
		'app.company',
		'app.inspection'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Association = ClassRegistry::init('Association');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Association);

		parent::tearDown();
	}

}
