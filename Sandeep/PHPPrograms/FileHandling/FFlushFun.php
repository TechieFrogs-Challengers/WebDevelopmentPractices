<?php
	//The fflush() function writes all buffered output to an open file.
	$file = fopen("data1.txt","r+");
	rewind($file);
	fwrite($file, 'Hello World');
	fflush($file);
	
	echo readfile("data1.txt");
	
	fclose($file);
?>