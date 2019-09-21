<?php
$str = '94sdada7078582_sda@qq.com';

$pattern ='/^([a-z0-9]+)([._-][a-z0-9]+)*@([a-z0-9]+)([._-][a-z0-9])*(\.[a-z]{2,})$/';

preg_match($pattern, $str,$match);

print_r($match);

?>