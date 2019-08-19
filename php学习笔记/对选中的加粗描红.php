<?php
	$str1 = "abcdefghijk";
	$str2 = "def";
	$str3 = str_ireplace($str2, "<font color='#FF0000')>".$str2."</font>", $str1);
	echo $str3;
?>