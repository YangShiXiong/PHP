<?php
	$str = <<<biao
	<div>
	<script src='jquery.js'></script>
	<h1>aaaaaa<h1>
	<script>alert</script>
	</div>
biao;

preg_match_all('/<script(.*)?>.*<\/script>/', $str, $ms);

echo "<pre>";
print_r($ms);
echo "<pre>";	
?>