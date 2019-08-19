<?php
	$str1=123456789;
	$str2=0x1234567890;
	$str3=1234;
	$str4=01234567;
	echo '数字1234567890的不同进制输出结果:<p>';
	echo '十进制的结果：'.$str1.'<br>';
	echo '十六进制的结果：'.$str2.'<br>';
	if($str3==$str4){
		echo 'str3=str4=' .$str3;
	}
	else{
		echo 'str3!=str4';
	}
?>