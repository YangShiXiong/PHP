<?php
	$str = "1234567890";
	function numfat($str){
		$str1 = strrev($str);
		$str2 = str_split($str1,3);
		return strrev(join(',',$str2));
	}

	echo numfat($str);
?>