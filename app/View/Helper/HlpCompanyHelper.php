<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class HlpCompanyHelper extends AppHelper
{
	function countCom($company_id){
		$this->Trainee = ClassRegistry::init('Trainee');
		$count_com = $this->Trainee->find('all', array(
			'conditions' => array('departure_status_id' => 1, 'company_id' => $company_id),
			'fields' => array('company_id', 'count(company_id) as count'),
			'recursive' => -1,
			'order' => array('company_id' => 'asc')
			));
		if(isset($count_com[0][0]['count'])){
			return $count_com[0][0]['count'];
		} else {
			return 0;
		}

	}


}