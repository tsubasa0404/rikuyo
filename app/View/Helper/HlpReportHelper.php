<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class HlpReportHelper extends AppHelper {

/**
 * Report index
 */

	//passed trainees total listから、
	//その年の合計人数を計算
	function sum_passed_trainees($data_array){
		$sum_passed_trainees = 0;
		if ( isset ( $data_array ) ) {
			foreach ($data_array as $value) {
				$monthly_passed_trainees_count = $value['total'];
				$sum_passed_trainees += $monthly_passed_trainees_count;
			}
			return $sum_passed_trainees;
		}
	}

	function passed_trainees_graph_data($data_array){
		$graph_data_array = array();

		for ($month=1; $month < 13; $month++) {
			foreach ($data_array as $value) { //2016-01、2016-02,2016-03をループで回す。
				if(str_pad($month,2,0,STR_PAD_LEFT) == $value['month']){ //もし01とmonth01が等しかったら、
					$monthly_passed_trainees_count = $value['total'];
					$graph_data = "[" . $month . "," . $monthly_passed_trainees_count. "]";
					array_push($graph_data_array, $graph_data); //データを配列に格納する。
					$month++; //$monthを1増やして、次のforeachの値を回す。
				}
			}
			if($month < 13){
				$monthly_passed_trainees_count = 0;
				$graph_data = "[" . $month . "," . $monthly_passed_trainees_count. "]";
				array_push($graph_data_array, $graph_data);
			}
		}
		return $graph_data_array;
	}

	function passed_trainees_graph_data_to_list_format($data_array){
		foreach ($data_array as $value) {
			str_replace("[", "", $value);

		}
	}
}