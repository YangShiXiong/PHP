<?php
	$arr = array(1,3,4,2,6,8,7,9);
	print_r(maopao($arr));
	$temp = 0;
	function maopao($arr){
		for($i=0;$i<count($arr);$i++){
			for($j=0;$j<count($arr)-1;$j++){
				if($arr[$j]>$arr[$j+1]){
					$temp = $arr[$j+1];
					$arr[$j+1] = $arr[$j];	
					$arr[$j] = $temp;
				}
			}
		}
		return $arr;
	}
?>