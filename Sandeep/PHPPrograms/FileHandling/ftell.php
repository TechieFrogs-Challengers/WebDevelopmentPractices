<?php
//The ftell() function returns the current position of the read/write pointer in an open file.
$file = fopen("data1.txt","r");

// Print current position
echo ftell($file);

// Change current position
fseek($file,"15");

// Print current position again
echo "<br>" . ftell($file);

fclose($file);
?>