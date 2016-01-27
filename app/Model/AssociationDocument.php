<?php
App::uses('AppModel', 'Model');
/**
 * AssociationDocument Model
 *
 * @property Association $Association
 * @property DocName $DocName
 * @property InterviewDocStatusList $InterviewDocStatusList
 */
class AssociationDocument extends AppModel {


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
		'DocName' => array(
			'className' => 'DocName',
			'foreignKey' => 'doc_name_id',
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
		'InterviewDocStatusList' => array(
			'className' => 'InterviewDocStatusList',
			'foreignKey' => 'association_document_id',
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
