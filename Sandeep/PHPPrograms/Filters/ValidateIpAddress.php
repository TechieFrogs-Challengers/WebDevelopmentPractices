<?php
	$ip = "127.0.0.1";
	//$ip = "127.0.0.1.25.6.5";

	if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
	  echo("$ip is a valid IP address");
	} else {
	  echo("$ip is not a valid IP address");
	}
?>