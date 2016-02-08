<?php
App::uses('AppModel', 'Model');
/**
 * Inspection Model
 *
 * @property Association $Association
 * @property Company $Company
 */
class Inspection extends AppModel {


	public function inspectionList(){
		$options = array();
		$options['conditions'] = array(
			'Inspection.flag'=> 0,
			'Inspection.status' => 0,
			'Inspection.inspection_from >=' => '(CURDATE() - interval 3 day)'
			);
		$options['fields'] = array(
			'Inspection.id',
			'Inspection.company_id',
			'Inspection.association_id',
			'Inspection.inspection_from',
			'Inspection.inspection_to',
			'Inspection.smb',
			'Inspection.staff',
			'Inspection.note',
			'Company.company_en',
			'Company.company_jp',
			'Association.association_en',
			'Association.association_jp',
			);
		$options['joins'][] = array(
			'table' => 'associations',
			'alias' => 'Association',
			'type' => 'LEFT',
			'conditions' => 'Inspection.association_id = Association.id'
			);
		$options['joins'][] = array(
			'table' => 'companies',
			'alias' => 'Company',
			'type' => 'LEFT',
			'conditions' => 'Company.id = Inspection.company_id'
			);

		$options['group'] = array('Inspection.id');
		$options['order'] = array('Inspection.inspection_from' => 'asc');
		$options['recursive'] = -1;
		return $this->find('all', $options);
	}

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
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
