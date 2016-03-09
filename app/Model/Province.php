<?php
App::uses('AppModel', 'Model');
/**
 * Province Model
 *
 * @property Agent $Agent
 * @property District $District
 * @property Trainee $Trainee
 */
class Province extends AppModel {

	public function optionProvince(){
		$options = array(
			'fields' => array(
				'Province.id',
				'Province.province_en',
			),
			'order' => array('Province.province_en' => 'asc'),
		);
		return $this->find('list', $options);
	}



/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Agent' => array(
			'className' => 'Agent',
			'foreignKey' => 'province_id',
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
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'province_id',
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
			'foreignKey' => 'province_id',
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
