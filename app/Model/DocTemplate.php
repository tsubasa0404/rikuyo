<?php
App::uses('AppModel', 'Model');
/**
 * DocTemplate Model
 *
 * @property DocumentName $DocumentName
 * @property OutputDocument $OutputDocument
 */
class DocTemplate extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DocName' => array(
			'className' => 'DocName',
			'foreignKey' => 'document_name_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'OutputDocument' => array(
			'className' => 'OutputDocument',
			'foreignKey' => 'doc_template_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
