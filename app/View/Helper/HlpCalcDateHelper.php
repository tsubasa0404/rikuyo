<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class HlpCalcDateHelper extends AppHelper
{
	function remaining_month($return_date){
    $today        = strtotime('now');
    $return_date  = strtotime($return_date);

    $return_month = date("Y",$return_date)*12+date("m",$return_date);
    $today_month  = date("Y",$today)*12+date("m",$today);

    $diff_month   = $return_month - $today_month;
    if($diff_month < 0){
    	return $diff_month = 0;
    }

		return $diff_month;
	}


}