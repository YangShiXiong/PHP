<?php
	$str1 = "贵州省北京省";
	$str2 = explode("省", $str1);
	$str3 = implode(",", $str2);
	echo $str3;
?>