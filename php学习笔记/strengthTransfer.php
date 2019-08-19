<?php
	$num='3.1415926r*r';
	echo '使用integer强制转换num: ';
	echo (integer)$num;
	echo '<p>';
	echo '输出integer$num的值：'.$num;
	echo '<p>';
	echo '使用settype转换$num类型: ';
	echo settype($num, 'integer');
	echo'<p>';
	echo '输出变量$num的值：'.$num;
?>