<?php
App::uses('AppModel', 'Model');
/**
 * Sector Model
 *
 */
class Sector extends AppModel {
	public function validSectors(){
		$options = array('conditions' => array(
			'flag' => 0
			));
		return $this->find('all', $options);
	}

	public function optionSectors($lang){
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
					'sector_jp'
				)
			);
		} else {
			$fields = array(
				'fields' =>array(
					'id',
					'sector_en'
					)
				);
		}
		$options = array_merge($options, $fields);
		return $this->find('list', $options);
	}
}
