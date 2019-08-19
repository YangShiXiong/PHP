<?php

	$str1 = "522601199711113794";//可从数据库中获得
	$str2 = "228993739219301";
	$str3 = strcmp($str1, $str2);
	if ($str3==0){
		echo "正确";
	}
	else{
		echo "请再次输入";
	}


?>