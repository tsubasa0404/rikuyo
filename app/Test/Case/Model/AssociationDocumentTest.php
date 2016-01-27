<?php
App::uses('AssociationDocument', 'Model');

/**
 * AssociationDocument Test Case
 *
 */
class AssociationDocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.association_document',
		'app.association',
		'app.doc_name',
		'app.interview_doc_status_list'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AssociationDocument = ClassRegistry::init('AssociationDocument');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AssociationDocument);

		parent::tearDown();
	}

}
