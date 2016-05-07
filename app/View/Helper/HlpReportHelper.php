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
	function sum_passed_trainees_dimensional_array($data_array){
		$sum_passed_trainees = 0;
		if ( isset ( $data_array ) ) {
			foreach ($data_array as $value) {
				$monthly_passed_trainees_count = $value['total'];
				$sum_passed_trainees += $monthly_passed_trainees_count;
			}
			return $sum_passed_trainees;
		}
	}

	function sum_passed_trainees($data_array){
		$sum_passed_trainees = 0;
		if ( isset ( $data_array ) ) {
			foreach ($data_array as $key => $value) {
				$passed_trainees_count = $value;
				$sum_passed_trainees += $passed_trainees_count;
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

	function passed_trainees_by_homeland_graph_data($data_array){
		$graph_data_array = array();

		foreach ($data_array as $value) {
			$graph_data = "[" . $value[0]['total'] . "," . $value['Province']['id'] . "]";
			array_push($graph_data_array, $graph_data);
		}
		return $graph_data_array;
	}

	function option_to_str_for_graph_data($data_array){
		$graph_data_array = array();

		foreach ($data_array as $key => $value) {
			$graph_data = "[" . $key . ',"' . $value . '"]';
			array_push($graph_data_array, $graph_data);
		}
		return $graph_data_array;
	}

	//departured trainees total listから、
	//その年の合計出国者人数を計算
	function sum_departured_trainees($data_array){
		$sum_departured_trainees = 0;
		if ( isset ( $data_array ) ) {
			foreach ($data_array as $value) {
				$monthly_departured_trainees_count = $value['total'];
				$sum_departured_trainees += $monthly_departured_trainees_count;
			}
			return $sum_departured_trainees;
		}
	}

	function departured_trainees_graph_data($data_array){
		$graph_data_array = array();

		for ($month=1; $month < 13; $month++) {
			foreach ($data_array as $value) { //2016-01、2016-02,2016-03をループで回す。
				if(str_pad($month,2,0,STR_PAD_LEFT) == $value['month']){ //もし01とmonth01が等しかったら、
					$monthly_departured_trainees_count = $value['total'];
					$graph_data = "[" . $month . "," . $monthly_departured_trainees_count. "]";
					array_push($graph_data_array, $graph_data); //データを配列に格納する。
					$month++; //$monthを1増やして、次のforeachの値を回す。
				}
			}
			if($month < 13){
				$monthly_departured_trainees_count = 0;
				$graph_data = "[" . $month . "," . $monthly_departured_trainees_count. "]";
				array_push($graph_data_array, $graph_data);
			}
		}
		return $graph_data_array;
	}

	function departured_trainees_by_homeland_graph_data($data_array){
		$graph_data_array = array();

		foreach ($data_array as $value) {
			$graph_data = "[" . $value[0]['total'] . "," . $value['Province']['id'] . "]";
			array_push($graph_data_array, $graph_data);
		}
		return $graph_data_array;
	}



}