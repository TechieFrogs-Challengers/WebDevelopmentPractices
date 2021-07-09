<?php
// Opening a file using fopen()
// function in read/write mode
$myfile = fopen("data.txt", 'r+')
	or die("File does not exist!");
	
$pointer = fgets($myfile);
echo $pointer;
fclose($myfile);
?>
