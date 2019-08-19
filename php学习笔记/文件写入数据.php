<?php  
	$filepath = "tm.txt";
	$str = "一个人  两个人<br>";
	$fd = fopen($filepath, 'w');
	flock($fd, LOCK_EX);
	fwrite($fd, $str);
	flock($fd, LOCK_UN);
	fclose($fd);
	readfile($filepath);
?>