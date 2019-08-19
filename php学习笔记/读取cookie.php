<?php
	$VisitTime = 'visittime';
	if (isset($_COOKIE[$VisitTime])){
		setcookie("visittime",date("Y-m-d H:i:s"));
		echo "欢迎你第一次访问网站！";
	}
	else{
		setcookie("visittime",date("Y-m-d H:i:s"),time()+60);
		echo "你上次访问网站时间为：".$_COOKIE["visittime"];
		echo "<br>";
	}
	echo "你本次访问网站时间为：".date("Y-m-d H:i:s");
?>