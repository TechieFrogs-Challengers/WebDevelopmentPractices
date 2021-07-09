<?php
//output filesize
echo filesize("data1.txt");
echo "<br />";

$file = fopen("data1.txt", "a+");
// truncate file
ftruncate($file,100);
fclose($file);

//Clear cache and check filesize again
clearstatcache();
echo filesize("daat1.txt");
?>