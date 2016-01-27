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

	public function optionJobs($lang){
			$options = array(
				'conditions' => array(
					'flag' => 0
					),
				'order' => array('id' => 'asc')
			);

		if($lang == 'ja'){
			$fields = array(
				'fields' => array(
					'id',
					'job_jp'
				)
			);
		} else {
			$fields = array(
				'fields' =>array(
					'id',
					'job_en'
					)
				);
		}
		$options = array_merge($options, $fields);
		return $this->find('list', $options);
	}
}
