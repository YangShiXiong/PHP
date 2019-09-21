<?php
$arr = array(
	array('id'=>0,'name'=>'12sdadsadsadsadasdad'),
	array('id'=>0,'name'=>'12sdadsadsadsa'),
	array('id'=>0,'name'=>'12sdads'),
	array('id'=>0,'name'=>'12sdadsadsadsadasss'),
	array('id'=>0,'name'=>'12sdadsadsadsadasdaddsad'),
	array('id'=>0,'name'=>'12sdadsadsadsadasdadsdadasdadsad'),
);

foreach ($arr as $value) {
	$arr1[] = strlen($value['name']);
}

array_multisort($arr1,$arr);

foreach ($arr as $key => $value) {

	echo $arr[$key]['id'].'<br>';
	$arr[$key]['id'] = $key+1;
}

print_r($arr);

?>