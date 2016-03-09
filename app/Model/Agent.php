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

	//interview profileページ
	public function optionAgents($lang){
			$options = array(
				'conditions' => array(
					'flag' => 0
					),
				'order' => array('id' => 'asc')
			);

		if($lang == 'ja'){
			$fields = array(
				'fields' => array(
					'id',
					'agent_jp'
				)
			);
		} else {
			$fields = array(
				'fields' =>array(
					'id',
					'agent_en'
					)
				);
		}
		$options = array_merge($options, $fields);
		return $this->find('list', $options);
	}


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
