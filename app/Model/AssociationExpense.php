<?php
App::uses('AppModel', 'Model');
/**
 * AssociationExpense Model
 *
 * @property Association $Association
 */
class AssociationExpense extends AppModel {

	public function expenses($association_id){
		$options = array(
			'conditions' => array(
				'association_id' => $association_id
			),
			'order' => array('pay_date' => 'asc'),
		);
		return $this->find('all', $options);
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'association_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
}
