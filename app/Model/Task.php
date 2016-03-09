<?php
App::uses('AppModel', 'Model');
/**
 * Task Model
 *
 * @property Status $Status
 */
class Task extends AppModel {

  public function tasks(){

    $options = array();

    $options['conditions'] = array(
      'status_id' => 0,
      'expected_date - CURDATE() <=' => 0
      );
    $options['fields'] = array(
      'id',
      'task',
      'someone',
      'expected_date',
      'status_id',
      'note',
      'flag',
      );

    $options['order'] = array('expected_date' => 'asc');
    $options['recursive'] = -1;
    return $this->find('all', $options);
  }



/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Status' => array(
			'className' => 'StatusList',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
