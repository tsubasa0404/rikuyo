<?php
App::uses('AppModel', 'Model');
/**
 * Commune Model
 *
 * @property District $District
 * @property Agent $Agent
 * @property Trainee $Trainee
 */
class Commune extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
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
		'Agent' => array(
			'className' => 'Agent',
			'foreignKey' => 'commune_id',
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
		'Trainee' => array(
			'className' => 'Trainee',
			'foreignKey' => 'commune_id',
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
