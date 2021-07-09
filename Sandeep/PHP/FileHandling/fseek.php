<?php
//The fseek() function seeks in an open file.

//This function moves the file pointer from its current position to a new position, forward or backward, specified by the number of bytes.
$file = fopen("contacts.txt","r");
// Read first line
echo fgets($file);
// Move back to beginning of file
fseek($file,0);
fclose($file);
?>