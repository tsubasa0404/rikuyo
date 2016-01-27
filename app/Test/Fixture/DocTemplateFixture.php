<?php
/**
 * DocTemplateFixture
 *
 */
class DocTemplateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'document_name_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'img_file_name' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lang' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'img_file_name_UNIQUE' => array('column' => 'img_file_name', 'unique' => 1),
			'document_name_id_idx' => array('column' => 'document_name_id', 'unique' => 0)
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
			'document_name_id' => 1,
			'img_file_name' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ipsum dolor sit amet',
			'note' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-01-26 05:13:58',
			'modified' => '2016-01-26 05:13:58'
		),
	);

}
