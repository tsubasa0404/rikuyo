<?php
App::uses('SectorMap', 'Model');

/**
 * SectorMap Test Case
 *
 */
class SectorMapTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sector_map',
		'app.association',
		'app.association_document',
		'app.doc_name',
		'app.doc_folder',
		'app.sub_folder',
		'app.interview_doc_status_list',
		'app.interview',
		'app.company',
		'app.inspection',
		'app.interview_candidate',
		'app.trainee',
		'app.province',
		'app.agent',
		'app.district',
		'app.commune',
		'app.job',
		'app.status_list',
		'app.trainee_class',
		'app.trainee_document',
		'app.trainee_expense',
		'app.trainee_family',
		'app.trainee_microfinance_image',
		'app.trainee_microfinance_record',
		'app.trainee_phone',
		'app.trainee_profile_image',
		'app.trainee_voice',
		'app.interview_result',
		'app.sector'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SectorMap = ClassRegistry::init('SectorMap');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SectorMap);

		parent::tearDown();
	}

}
