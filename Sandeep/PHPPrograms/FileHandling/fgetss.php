<?php
	//Read one line from the open HTML file (strip tags):
	$file = fopen("Sample.html","r");
	echo fgetss($file);
	fclose($file);
?>