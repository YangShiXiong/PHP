<?php
function quick_sort($arr){
	$length = count($arr);
	if($length<=1){
		return $arr;
	}

	$base_num = $arr[0];
	$left_arr = array();
	$right_arr = array();

	for($i=1;$i<$length;$i++){
		if($base_num>$arr[$i]){
			$left_arr[] = $arr[$i];
		}else{
			$right_arr[] = $arr[$i];
		}
	}

	$left_arr = quick_sort($left_arr);
	$right_arr = quick_sort($right_arr);

	return array_merge($left_arr,array($base_num),$right_arr);
}

$arr = array(1,7,4,3);
print_r(quick_sort($arr)); 


?>