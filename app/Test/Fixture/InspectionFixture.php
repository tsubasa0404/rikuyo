<?php
/**
 * InspectionFixture
 *
 */
class InspectionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'association_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'company_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'smb' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'staff' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'from' => array('type' => 'date', 'null' => true, 'default' => null),
		'to' => array('type' => 'date', 'null' => true, 'default' => null),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'flag' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'company_id_idx' => array('column' => 'company_id', 'unique' => 0),
			'association_id_idx' => array('column' => 'association_id', 'unique' => 0)
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
			'association_id' => 1,
			'company_id' => 1,
			'smb' => 'Lorem ipsum dolor sit amet',
			'staff' => 'Lorem ipsum dolor sit amet',
			'from' => '2016-01-26',
			'to' => '2016-01-26',
			'note' => 'Lorem ipsum dolor sit amet',
			'flag' => 1
		),
	);

}
