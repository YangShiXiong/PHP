<?php
	$str = "hello word /";
	$str1 = "";

	for($i=0;$i<2;$i++){
		$str1 = $str.$str1;
		$file = "hello.txt";
		$fp = fopen($file, 'w');
		fwrite($fp, $str1);
	} 

?>