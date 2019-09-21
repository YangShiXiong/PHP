<?php
	$ip = "172.263.23.100";
	$str = substr($ip,0,strrpos($ip, '.'));
	$str3 = substr($ip,(strrpos($ip, '.')+1));
	$str1 = "172.263.23";
	if((strcmp($str1, $str) == 0)&&($str3>=100&&$str3<=150)){
		echo "ok";
	}else{
		echo "error";
	}
?>