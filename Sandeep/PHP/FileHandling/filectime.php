<?php
//last change time
echo filectime("data.txt");
echo "<br>";
echo "Last changed: ".date("F d Y H:i:s.", filectime("data.txt"));
?>