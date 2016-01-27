<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 */
class Job extends AppModel {
	public function validJobs(){
		$options = array('conditions' => array(
			'flag' => 0
			));
		return $this->find('all', $options);
	}
}
