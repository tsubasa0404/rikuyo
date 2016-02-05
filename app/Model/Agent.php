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


	public function validAgents(){
		$options = array();
		$options['conditions'] = array(
			'Agent.flag' => 0
			);

		$options['group'] = array('Agent.id');
		$options['order'] = array('Agent.agent_en' => 'asc');
		$options['fields'] = array(
			'Agent.id',
			'Agent.agent_jp',
			'Agent.agent_en',
			'Agent.address_en',
			'Agent.phone1',
			);


		return $this->find('all', $options);
	}

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


}
