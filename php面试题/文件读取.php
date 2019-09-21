<?php
	$dir = 'vow';
	function dirlist($dir){
		$arr = scandir($dir);
		foreach ($arr as $list) {
			if($list!='.' && $list!='..' ){
				$path = $dir.'/'.$list;
				if(is_dir($path)){
					dirlist($path);
				}else{
					echo "<p>{$path}</p>";
				}
			}
		}
	}

	dirlist($dir);
?>