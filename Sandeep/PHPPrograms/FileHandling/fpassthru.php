<?php
//The fpassthru() function reads from the current position in a file - until EOF, and then writes the result to the output buffer.
$file = fopen("data.txt","r");
// Read first line
fgets($file);

// Read from the current position in file - until EOF, and then write the result to the output buffer
echo fpassthru($file);

fclose($file);
?>