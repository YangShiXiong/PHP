<?php 
	$time1 = date("Y-m-d H:i:s");
	$time2 = "2018-2-3 16:30:00";
	echo "变量s1时间为：".$time1;
	echo "<br>";
	echo "变量s1时间为：".$time2;
	echo "<br>";
	if (strtotime($time1)-strtotime($time2)<0){
		echo "time1早于time2";
	}
	else{
		echo"time1晚于time2";
	}
 ?>