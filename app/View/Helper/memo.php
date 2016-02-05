//日付をフォーマットするときは、
//date()で、Y-m-d文字列に変換して、
//-でexplodeしたものをlistで各配列に入れて、echoする。
<?php
	$birthday = $this->request->data['Trainee']['birthday'];
	$birthday_time = date('Y-m-d', strtotime($birthday));
	list($y['y'], $m['m'], $d['d']) = explode('-', $birthday_time);
	echo $y['y']."年".$m['m']."月" . $d['d'] ."日";
?>