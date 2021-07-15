<?php
	$int = 1222;
	$min = 1;
	$max = 200;

	if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
	  echo("Variable value is not within the  range");
	} else {
	  echo("Variable value is within the  range");
	}
?>