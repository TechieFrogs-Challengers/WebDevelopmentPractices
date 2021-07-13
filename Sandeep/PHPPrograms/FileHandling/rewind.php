<?php
//The rewind() function "rewinds" the position of the file pointer to the beginning of the file.
$file = fopen("data1.txt","r");

//Change position of file pointer
fseek($file,"15");

//Set file pointer to 0
rewind($file);

fclose($file);
?>