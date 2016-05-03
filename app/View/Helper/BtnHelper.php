<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class BtnHelper extends AppHelper
{
	function statusBtn($chk, $class = null){

		switch ($chk) {
			//未了のとき
			case 0:
				return '<span class="label label-danger '.$class.'">No</span>';
				break;

			//完了のとき
			case 1:
				return '<span class="label label-success '.$class.'">OK</span>';
				break;

			default :
				return '';
				break;
		}
	}

	function studentStatusBtn($chk, $class = null){

		switch ($chk) {
			//未了のとき
			case 0:
				return '<span class="label label-default '.$class.'">Not Yet</span>';
				break;

			//Unavailableのとき
			case 1:
				return '<span class="label label-warning '.$class.'">Unavailable</span>';
				break;

			//Cancelのとき
			case 2:
				return '<span class="label label-danger '.$class.'">Cancel</span>';
				break;

			//Delayedのとき
			case 3:
				return '<span class="label label-info '.$class.'">Delayed</span>';
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

				default :
					return $en;
		}
	}

	function calcAge($birthday){
		$now = date('Ymd');
		$birthday = date('Ymd', strtotime($birthday));
		return floor(($now-$birthday)/10000);
	}


}