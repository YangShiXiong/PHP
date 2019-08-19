<?php  
	$filepath = "tm.txt";
	$str = "一个人  两个人<br>";
	echo "用fwrite写入文件： ";
	$fopen = fopen($filepath, 'w')or die('文件不存在');
	fwrite($fopen, $str);
	fclose($fopen);
	readfile($filepath);
	echo " 用file_put_contents函数写入文件: ";
	file_get_contents($filepath,$str);
	readfile($filepath);

?>