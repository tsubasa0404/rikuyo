<?php
/**
 * CambodiaPlaceDictionaryFixture
 *
 */
class CambodiaPlaceDictionaryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'place_en' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'key' => 'unique', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'place_kh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'place_jp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'place_en_unq' => array('column' => 'place_en', 'unique' => 1)
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
			'place_en' => 'Lorem ipsum dolor sit amet',
			'place_kh' => 'Lorem ipsum dolor sit amet',
			'place_jp' => 'Lorem ipsum dolor sit amet'
		),
	);

}
