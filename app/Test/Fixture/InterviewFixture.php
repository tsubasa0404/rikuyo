<?php
/**
 * InterviewFixture
 *
 */
class InterviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'company_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'job' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'work_place' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'company_info' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'work_content' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'work_schedule' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'adoption_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sex' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'age' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hourly_wage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'basic_wage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'deduction' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'breakdown' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'employment_insurance' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'social_insurance' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'boarding_fee' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'utility_cost' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'take_home' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'wage_note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'request' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'immigration_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'interview_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'interview_time' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'interview_place' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'interview_detail' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'interview_staff' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'flag' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'company_id_idx' => array('column' => 'company_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'job' => 'Lorem ipsum dolor sit amet',
			'work_place' => 'Lorem ipsum dolor sit amet',
			'company_info' => 'Lorem ipsum dolor sit amet',
			'work_content' => 'Lorem ipsum dolor sit amet',
			'work_schedule' => 'Lorem ipsum dolor sit amet',
			'adoption_num' => 1,
			'sex' => 1,
			'age' => 'Lorem ipsum dolor sit amet',
			'hourly_wage' => 1,
			'basic_wage' => 1,
			'deduction' => 1,
			'breakdown' => 'Lorem ipsum dolor sit amet',
			'employment_insurance' => 1,
			'social_insurance' => 1,
			'boarding_fee' => 1,
			'utility_cost' => 1,
			'take_home' => 1,
			'wage_note' => 'Lorem ipsum dolor sit amet',
			'request' => 'Lorem ipsum dolor sit amet',
			'immigration_time' => 'Lorem ipsum dolor sit amet',
			'start_time' => 'Lorem ipsum dolor sit amet',
			'interview_date' => 'Lorem ipsum dolor sit amet',
			'interview_time' => 'Lorem ipsum dolor sit amet',
			'interview_place' => 'Lorem ipsum dolor sit amet',
			'interview_detail' => 'Lorem ipsum dolor sit amet',
			'interview_staff' => 'Lorem ipsum dolor sit amet',
			'flag' => 1
		),
	);

}
