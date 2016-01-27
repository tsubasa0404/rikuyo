<?php
/**
 * AgentFixture
 *
 */
class AgentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'agent_en' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'agent_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_family_name_en' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_family_name_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_given_name_en' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_given_name_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_position_en' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_position_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rep_sex' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'establish_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'capital_riel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'capital_jpy' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sales_riel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sales_jpy' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'employee_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'export_en' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'export_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'import_en' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'import_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'province_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'district_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'commune_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'address_kh' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address_en' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone1_smb' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone2_smb' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail1_smb' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail2_smb' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sector' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'flag' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'agent_en' => 'Lorem ipsum dolor sit amet',
			'agent_jp' => 'Lorem ipsum dolor sit amet',
			'rep_family_name_en' => 'Lorem ipsum dolor sit amet',
			'rep_family_name_jp' => 'Lorem ipsum dolor sit amet',
			'rep_given_name_en' => 'Lorem ipsum dolor sit amet',
			'rep_given_name_jp' => 'Lorem ipsum dolor sit amet',
			'rep_position_en' => 'Lorem ipsum dolor sit amet',
			'rep_position_jp' => 'Lorem ipsum dolor sit amet',
			'rep_sex' => 'Lorem ipsum dolor sit amet',
			'establish_date' => 'Lorem ipsum dolor sit amet',
			'capital_riel' => 1,
			'capital_jpy' => 1,
			'sales_riel' => 1,
			'sales_jpy' => 1,
			'employee_num' => 1,
			'export_en' => 'Lorem ipsum dolor sit amet',
			'export_jp' => 'Lorem ipsum dolor sit amet',
			'import_en' => 'Lorem ipsum dolor sit amet',
			'import_jp' => 'Lorem ipsum dolor sit amet',
			'province_id' => 1,
			'district_id' => 1,
			'commune_id' => 1,
			'address_kh' => 'Lorem ipsum dolor sit amet',
			'address_en' => 'Lorem ipsum dolor sit amet',
			'phone1' => 'Lorem ipsum dolor sit amet',
			'phone1_smb' => 'Lorem ipsum dolor sit amet',
			'phone2' => 'Lorem ipsum dolor sit amet',
			'phone2_smb' => 'Lorem ipsum dolor sit amet',
			'mail1' => 'Lorem ipsum dolor sit amet',
			'mail1_smb' => 'Lorem ipsum dolor sit amet',
			'mail2' => 'Lorem ipsum dolor sit amet',
			'mail2_smb' => 'Lorem ipsum dolor sit amet',
			'sector' => 'Lorem ipsum dolor sit amet',
			'note' => 'Lorem ipsum dolor sit amet',
			'flag' => 1
		),
	);

}
