<?php
	echo "输出当前时间：".mktime();
	echo "<br>";
	echo "输出格式后时间：".date("Y-m-d",mktime());
	echo "<br>";
	echo "输出格式后时间：".date("H:i:s",mktime());
?>