<?php

//The ftruncate() function truncates an open file to the specified length.
// Check filesize
echo filesize("data1.txt");
echo "<br>";

$file = fopen("data1.txt", "a+");
ftruncate($file,100);
fclose($file);

// Clear cache and check filesize again
clearstatcache();
echo filesize("data1.txt");
?>