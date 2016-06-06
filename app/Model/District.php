<?php
App::uses('AppModel', 'Model');
/**
 * District Model
 *
 * @property Province $Province
 * @property Agent $Agent
 * @property Commune $Commune
 * @property Trainee $Trainee
 */
class District extends AppModel {

	public function formatPlacesToJsonForAddCommune($area_category){
		$org_places = $this->optionCommuneDistrictProvincesForAddCommune($area_category);
		// var_dump($org_places);die();
		foreach($org_places as $place){
			$districts[] = array(
				'province_id' => $place['ProvinceForAddCommune']['id'],
				'district_id' => $place['District']['id'],
				'district' => $place['District']['district_en'],
				);
		}

		if($area_category == 'district'){
			return $districts;
		} elseif($area_category == 'commune') {
			return $communes;
		}
	}

	public function optionCommuneDistrictProvincesForAddCommune($area_category){

		$options = array();
		$options['conditions'] = array(
			);
		$options['fields'] = array(
			'ProvinceForAddCommune.id',
			'ProvinceForAddCommune.province_en',
			'District.id',
			'District.district_en',
			);
		$options['joins'][] = array(
			'table' => 'provinces',
			'alias' => 'ProvinceForAddCommune',
			'type' => 'LEFT',
			'conditions' => 'District.province_id = ProvinceForAddCommune.id'
			);

		return $this->find('all', $options);
	}



	public function optionDistrict(){
		$options = array(
			'fields' => array(
				'District.id',
				'District.District_en',
			),
			'order' => array('District.District_en' => 'asc'),
			'group' => array('District.district_en')
		);
		return $this->find('list', $options);
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
			'foreignKey' => 'district_id',
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
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'district_id',
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
			'foreignKey' => 'district_id',
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
