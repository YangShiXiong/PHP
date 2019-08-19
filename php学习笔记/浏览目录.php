<?php
	$path = 'F:\sa\ww\tm\13';
	if (is_dir($path)){
		$dir = scandir($path);
		foreach ($path as $link) {
			echo $link;
		}
	}
	else{
		echo "error";
	}
 ?>