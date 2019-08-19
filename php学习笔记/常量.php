<?php
	define("MESSAGE", "只能看见一次");
	echo MESSAGE."<BR>";
	echo Message."<BR>";
	define("COUNT","能看见多少次",true);
	echo COUNT."<BR>";
	echo Count."<BR>";
	$name="count" ;
	echo constant($name)."<BR>";
	echo (define("MESSAGE"))."<BR>";
?>