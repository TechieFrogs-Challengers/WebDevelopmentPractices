<?php
// Opening a file using fopen() function
// in read mode along with b flag
$myfile = fopen("data.txt", "rb");
$contents = fread($myfile, filesize($myfile));
fclose($myfile);
print $contents;
?>
