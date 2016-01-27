<?php
App::uses('AppModel', 'Model');
/**
 * Inspection Model
 *
 * @property Association $Association
 * @property Company $Company
 */
class Inspection extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Association' => array(
			'className' => 'Association',
			'foreignKey' => 'association_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
