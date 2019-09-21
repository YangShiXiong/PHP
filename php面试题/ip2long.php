<?php
$ip = "127.36.56.100";
$ip1 = "127.36.56.150";
$ip2 = "127.36.56.120";

echo abs(ip2long($ip)).'<br>';
echo abs(ip2long($ip1)).'<br>';
echo abs(ip2long($ip2)).'<br>';

$low = abs(ip2long($ip));
$high = abs(ip2long($ip1));
$temp = abs(ip2long($ip2));

if($temp>$low&&$temp<$high){
	echo "YES";	
}else{
	echo "NO";
}

?>