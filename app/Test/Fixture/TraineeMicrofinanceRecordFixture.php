<?php
/**
 * TraineeMicrofinanceRecordFixture
 *
 */
class TraineeMicrofinanceRecordFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'trainee_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'pay_month' => array('type' => 'date', 'null' => true, 'default' => null),
		'pay_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pay_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'status_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'flag' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'trainee_id_idx' => array('column' => 'trainee_id', 'unique' => 0)
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
			'trainee_id' => 1,
			'pay_month' => '2016-01-26',
			'pay_price' => 1,
			'pay_date' => '2016-01-26',
			'status_id' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'flag' => 1
		),
	);

}
