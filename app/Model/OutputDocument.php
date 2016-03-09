<?php
App::uses('AppModel', 'Model');
/**
 * OutputDocument Model
 *
 * @property DocTemplate $DocTemplate
 */
class OutputDocument extends AppModel {




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
