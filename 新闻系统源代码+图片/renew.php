<?php
$arr=array();
$count1=0;
$count = 0;
$return = array();
while ($count < 8) 
 {
 $return[] = mt_rand(1, 20);
 $return = array_flip(array_flip($return));
 $count = count($return);
 } 
echo "<br/>";
$arr=array_values($return);// 获得数组的值 
echo $arr[0];
?>