<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Role $Role
 */
class User extends AppModel {

	public $actsAs = array('Acl' => array('type' => 'requester'));
	public function parentNode() {
		if (!$this->id && empty($this->data)) {
		   return null;
		}
		if (isset($this->data['User']['role_id'])) {
		   $roleId = $this->data['User']['role_id'];
		} else {
		   $roleId = $this->field('role_id');
		}
		if (!$roleId) {
		   return null;
		} else {
		   return array('Role' => array('id' => $roleId));
		}
   }

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
