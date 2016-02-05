<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class BtnHelper extends AppHelper
{
	function statusBtn($chk){

		switch ($chk) {
			//未了のとき
			case 0:
				return '<span class="label label-danger">No</span>';
				break;

			//完了のとき
			case 1:
				return '<span class="label label-success">OK</span>';
				break;

			default :
				return '';
				break;
		}
	}

	function switchLang($lang, $ja, $en){
		switch ($lang){
			case 'ja':
				return $ja;
				break;

			case 'en':
				return $en;
				break;
		}
	}

	function calcAge($birthday){
		$now = date('Ymd');
		$birthday = date('Ymd', strtotime($birthday));
		return floor(($now-$birthday)/10000);
	}


}