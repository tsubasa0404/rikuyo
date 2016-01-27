<?php
App::uses('AppModel', 'Model');
/**
 * Association Model
 *
 * @property AssociationDocument $AssociationDocument
 * @property Company $Company
 * @property Inspection $Inspection
 */
class Association extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AssociationDocument' => array(
			'className' => 'AssociationDocument',
			'foreignKey' => 'association_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'association_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Inspection' => array(
			'className' => 'Inspection',
			'foreignKey' => 'association_id',
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


	public function validAssociations(){
		$options = array('conditions' => array(
			'flag' => 0
			));
		return $this->find('all', $options);
	}
}
