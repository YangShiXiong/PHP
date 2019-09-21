<?php
	$a = '/a/b/c/d/e/f/g.php';
	$b = '/a/b/12/34/d/c/c.php';
	function GetRelativePath($a,$b){
		$arrA = explode('/',dirname($a));
		$arrB = explode('/', dirname($b));
		$cnt = 0;
		for($i=0;$i<count($arrB);$i++){
			if($arrA[$i] == $arrB[$i]){
				$cnt++;
			}else{
				break;
			}
		}
		return $cnt;
	}

	$arrA = explode('/',dirname($a));
	$arrB = explode('/', dirname($b));
	$length = GetRelativePath($a,$b);
	$arr = array();	
	for($j=$length;$j<count($arrA);$j++){
		$arr[] = $arrA[$j];
	}
	$arr1 = array();
	for($i=1;$i<$length;$i++){
		$arr1[] = '../'; 
	}
	print_r($arr1);
	print_r($arr);
	echo "<br>";
	print_r(array_merge($arr1,$arr));
	
?>