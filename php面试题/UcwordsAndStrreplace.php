<?php
	function strim($str){
		return str_replace(' ','',ucwords(str_replace('_',' ',$str)));
	}

	print_r(strim("open_door"));
?>