<?php
App::uses('AppModel', 'Model');
/**
 * Agent Model
 *
 * @property Province $Province
 * @property District $District
 * @property Commune $Commune
 */
class Agent extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'commune_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function validAgents(){
		$options = array('conditions' => array(
			'flag' => 0
			));
		return $this->find('all', $options);
	}
}
