<?php
/**
 * AssociationDocumentFixture
 *
 */
class AssociationDocumentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'association_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'doc_name_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'selected' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'association_id_idx' => array('column' => 'association_id', 'unique' => 0),
			'document_id_idx' => array('column' => 'doc_name_id', 'unique' => 0)
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
			'doc_name_id' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'selected' => 1
		),
	);

}
