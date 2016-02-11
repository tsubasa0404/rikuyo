<?php
App::uses('AppModel', 'Model');
/**
 * TraineeExpense Model
 *
 * @property Trainee $Trainee
 */
class TraineeExpense extends AppModel {

	 public function expenses(){

    $options = array();

    $options['conditions'] = array(
      'pay_date ' => NULL,
      'expected_date - CURDATE() <=' => 0 //CURDATEと比較するカラムの型がDateになっていること。
      );
    $options['fields'] = array(
      'id',
      'trainee_id',
      'expected_date',
      'expected_price',
      'pay_date',
      'pay_price',
      'note',
      'flag',
      'Trainee.id',
      'Trainee.control_no',
      'Trainee.family_name_en',
      'Trainee.given_name_en',
      );
		$options['joins'][] = array(
	    'table' => 'trainees',
	    'alias' => 'Trainee',
	    'type' => 'LEFT',
	    'conditions' => 'Trainee.id = TraineeExpense.trainee_id'
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
		'Trainee' => array(
			'className' => 'Trainee',
			'foreignKey' => 'trainee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
