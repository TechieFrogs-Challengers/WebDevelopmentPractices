<?php
// Opening a file using fopen() function
// in read/write mode
$myfile = fopen("data.txt", "w+");

// writing to file
fwrite($myfile, 'java');

// Setting the file pointer to 0th
// position using rewind() function
rewind($myfile);

// writing to file on 0th position
fwrite($myfile, 'sandeep');
rewind($myfile);

// displaying the contents of the file
echo fread($myfile, filesize("data.txt"));
fclose($myfile);
?>
