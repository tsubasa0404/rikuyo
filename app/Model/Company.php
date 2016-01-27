<?php
App::uses('AppModel', 'Model');
/**
 * Company Model
 *
 * @property Association $Association
 * @property Inspection $Inspection
 * @property Interview $Interview
 */
class Company extends AppModel {


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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Inspection' => array(
			'className' => 'Inspection',
			'foreignKey' => 'company_id',
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
		'Interview' => array(
			'className' => 'Interview',
			'foreignKey' => 'company_id',
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

	public function companyList(){
		$options = array(
			'conditions' => array(
				'Company.flag' => 0
				),
			'fields' => array(
				'Company.id',
				'Company.company_jp',
				'Company.company_en',
				'Company.province',
				'Company.address_jp',
				'Company.address_en',
				'Company.phone1',
				'Company.job',
				'Company.company_jp',
				'Company.company_jp',
				'Association.id',
				'Association.association_jp',
				'Association.association_en'
				),
			'order' => array('Company.id' => 'asc'),
			);

		return $this->find('all', $options);
	}
}
