<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 */
class Job extends AppModel {
	public function validJobs(){
		$options = array();
		$options['conditions'] = array(
			'Job.flag' => 0
			);
		$options['fields'] = array(
			'id',
			'job_en',
			'job_jp',
			'job_kh',
			'Sector.sector_jp',
			'Sector.sector_en',
			);
		$options['joins'][] = array(
			'table' => 'sectors',
			'alias' => 'Sector',
			'type' => 'LEFT',
			'conditions' => 'Sector.id = sector_id'
			);
		$options['order'] = array('sector_id' => 'asc');
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
