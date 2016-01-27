<?php
/**
 * InterviewCandidateFixture
 *
 */
class InterviewCandidateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'interview_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'trainee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'interview_result_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false, 'key' => 'index'),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'interview_id_idx' => array('column' => 'interview_id', 'unique' => 0),
			'trainee_id_idx' => array('column' => 'trainee_id', 'unique' => 0),
			'result_id_idx' => array('column' => 'interview_result_id', 'unique' => 0)
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
			'interview_id' => 1,
			'trainee_id' => 1,
			'interview_result_id' => 1,
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);

}
