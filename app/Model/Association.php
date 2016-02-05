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

	public function validAssociations(){
		$options = array();
		$options['conditions'] = array(
			'flag' => 0
			);
		$options['fields'] = array(
			'id',
			'association_jp',
			'association_en',
			'province',
			'address_jp',
			'address_en',
			'phone1',
			'sector',
			);
		return $this->find('all', $options);
	}

	public function optionAssociations($lang){
			$options = array(
				'conditions' => array(
					'flag' => 0
					),
				'order' => array('association_en' => 'asc')
			);

			if($lang == 'ja'){
				$fields = array(
					'fields' => array(
						'id',
						'association_jp'
					)
				);
			} else {
				$fields = array(
					'fields' =>array(
						'id',
						'association_en'
						)
					);
			}
			$options = array_merge($options, $fields);

			return $this->find('list', $options);
	}

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



}
