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


	public function optionCommuneDistrictProvinces($area_category){

		$options = array();
		$options['conditions'] = array(
			);
		$options['fields'] = array(
			'Commune.province_id',
			'Province.province_en',
			'Commune.district_id',
			'District.district_en',
			'Commune.id',
			'Commune.commune_en'
			);
		$options['joins'][] = array(
			'table' => 'districts',
			'alias' => 'District',
			'type' => 'LEFT',
			'conditions' => 'Commune.district_id = District.id'
			);
		$options['joins'][] = array(
			'table' => 'provinces',
			'alias' => 'Province',
			'type' => 'LEFT',
			'conditions' => 'Commune.province_id = Province.id'
			);
		if($area_category == 'district'){
			$options['group'] = 'district_id';
		} elseif($area_category == 'commune'){
			$options['group'] = 'id';
		}

		return $this->find('all', $options);
	}

	public function formatPlacesToJson($area_category){
		$org_places = $this->optionCommuneDistrictProvinces($area_category);
		foreach($org_places as $place){
			$districts[] = array(
				'province_id' => $place['Commune']['province_id'],
				'district_id' => $place['Commune']['district_id'],
				'district' => $place['District']['district_en'],
				);
			$communes[] = array(
				'commune_id' => $place['Commune']['id'],
				'province' => $place['Province']['province_en'],
				'commune' => $place['Commune']['commune_en'],
				'district_id' => $place['Commune']['district_id'],
				'district' => $place['District']['district_en'],
				);
		}

		if($area_category == 'district'){
			return $districts;
		} elseif($area_category == 'commune') {
			return $communes;
		}
	}

	public function optionCommune(){
		$options = array(
			'fields' => array(
				'Commune.id',
				'Commune.commune_en',
			),
			'order' => array('Commune.commune_en' => 'asc'),
			'group' => array('Commune.commune_en')
		);
		return $this->find('list', $options);
	}



/**
 * belongsTo associations
 *
 * @var array
 */

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
