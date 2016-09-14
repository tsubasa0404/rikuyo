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


    function transform_date($date, $lang=null){
        $date_to_time = date('Y-m-d', strtotime($date));
        list($y['y'], $m['m'], $d['d']) = explode('-', $date_to_time);

        if($lang=='ja'){
            echo $y['y']."年".$m['m']."月" . $d['d'] ."日";
        } else {
            echo $d['d']."/".$m['m']."/".$y['y'];
        }

    }

}