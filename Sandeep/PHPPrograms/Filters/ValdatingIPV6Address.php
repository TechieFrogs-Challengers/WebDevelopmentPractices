<?php
	//$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	$ip="56654.189168.1498486.1486486.4894.2.2.0:5585";

	if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
	  echo("$ip is a valid IPv6 address");
	} else {
	  echo("$ip is not a valid IPv6 address");
	}
?>
