<?php
/**
 * DocNameFixture
 *
 */
class DocNameFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name_en' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'folder_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sub_folder_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false, 'key' => 'index'),
		'lang_jpn' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'lang_eng' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'lang_khm' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'flag' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'folder_id_idx' => array('column' => 'folder_id', 'unique' => 0),
			'sub_folder_id_idx' => array('column' => 'sub_folder_id', 'unique' => 0)
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
			'name_jp' => 'Lorem ipsum dolor sit amet',
			'name_en' => 'Lorem ipsum dolor sit amet',
			'folder_id' => 1,
			'sub_folder_id' => 1,
			'lang_jpn' => 1,
			'lang_eng' => 1,
			'lang_khm' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-01-26 03:03:24',
			'modified' => '2016-01-26 03:03:24',
			'flag' => 1
		),
	);

}
