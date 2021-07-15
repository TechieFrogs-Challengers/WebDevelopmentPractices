<?php
	if (!filter_has_var(INPUT_GET, "email")) {
		echo("Email not found");
	} else {
		echo("Email found");
	}
?>