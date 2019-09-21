<?php
$arr = [1,1];

function suafa($arr){
	for($i=2;$i<29;$i++){
		$arr[$i] = $arr[$i-1]+$arr[$i-2];
	}

	return $arr;
}


print_r(suafa($arr));

  ?>