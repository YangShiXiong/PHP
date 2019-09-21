<?php
$arr = array(1,2,3,4);
function doublequeue($arr){
	$a = array(5,6);
	array_unshift($arr, $a);
	array_shift($arr);
	array_push($arr, $a);
	array_pop($arr);

	return $arr;
}


print_r(doublequeue($arr));

  ?>
