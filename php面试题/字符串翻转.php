<?php
	$str = 'abcdefj';
	function show($str){
		$str1 = array();
		$j = 0;
		$len = strlen($str);
		for($i=$len-1; $i>=0; $i--){
			$str1[$j++] = $str[$i];
		}

		return $str1;
	}

	 print_r(show($str));

?>