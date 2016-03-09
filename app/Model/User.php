<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Role $Role
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please input username.'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'This username already exists.'
				),
			'alphanumeric' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Alphabet and Number is valid here.'
				)
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please input password.',
			),
			'alphanumeric' => array(
				'rule' => 'alphanumeric',
				'message' => 'Alphabet and Number is valid here.'
				)
		)
	);


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeSave($options = array()) {
	  $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	  return true;
  }
}
