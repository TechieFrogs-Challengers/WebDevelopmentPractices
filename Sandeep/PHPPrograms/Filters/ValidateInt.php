<?php
	$int = "564156";
	//$int =2318;
	//$int = "564156sdlkvn";
	
	if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
	  echo("Integer is valid");
	} else {
	  echo("Integer is not valid");
	}
?>