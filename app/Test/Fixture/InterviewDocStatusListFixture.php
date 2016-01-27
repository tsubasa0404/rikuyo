<?php
/**
 * InterviewDocStatusListFixture
 *
 */
class InterviewDocStatusListFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'interview_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'association_document_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'status_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'interview_doc_status_listscol' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'interview_id_idx' => array('column' => 'interview_id', 'unique' => 0),
			'association_document_id_idx' => array('column' => 'association_document_id', 'unique' => 0)
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
			'association_document_id' => 1,
			'status_id' => 1,
			'interview_doc_status_listscol' => 'Lorem ipsum dolor sit amet'
		),
	);

}
