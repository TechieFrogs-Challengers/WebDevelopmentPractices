<?php
echo filemtime("data.txt");
echo "<br>";
echo "Content last changed: ".date("F d Y H:i:s.", filemtime("data.txt"));
?>