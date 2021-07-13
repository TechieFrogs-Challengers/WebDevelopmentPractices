<?php
//Get last access time
echo fileatime("data1.txt");
echo "<br>";
echo "Last access: ".date("F d Y H:i:s.", fileatime("data1.txt"));
?>