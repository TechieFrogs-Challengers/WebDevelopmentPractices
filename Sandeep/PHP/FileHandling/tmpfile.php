<?php
//The tmpfile() function creates a temporary file with a unique name in read-write (w+) mode.
$temp = tmpfile();

fwrite($temp, "Testing, testing.");
//Rewind to the start of file
rewind($temp);
//Read 1k from file
echo fread($temp,1024);

//This removes the file
fclose($temp);
?>