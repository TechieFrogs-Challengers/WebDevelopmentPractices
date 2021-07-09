<?php
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("data.txt"));
echo "<br><br>Size Of File Is ::: ";
echo filesize("data.txt");
fclose($myfile);
?>
