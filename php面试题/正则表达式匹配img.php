<?php
$str = '<img alt="高清无码" id="av" src="av.jpg" />';
$pattern = '/<img.*?src="(.*?)".*?\/?>/i';

preg_match($pattern, $str,$match);

var_dump($match);	
?>