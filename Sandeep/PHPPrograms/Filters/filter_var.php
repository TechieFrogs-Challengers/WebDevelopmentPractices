<?php
	//removes all html tags from the data
	$str = "<h1>Sai <br> Sandeep </h1>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	echo $newstr;
?>