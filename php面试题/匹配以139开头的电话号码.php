<?php
$str = '13988888888';
$pattern = '/^139\d{8}$/';

preg_match($pattern, $str,$match);

var_dump($match);

?>