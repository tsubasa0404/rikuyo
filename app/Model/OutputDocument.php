<?php
App::uses('AppModel', 'Model');
/**
 * OutputDocument Model
 *
 * @property DocTemplate $DocTemplate
 */
class OutputDocument extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DocTemplate' => array(
			'className' => 'DocTemplate',
			'foreignKey' => 'doc_template_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
