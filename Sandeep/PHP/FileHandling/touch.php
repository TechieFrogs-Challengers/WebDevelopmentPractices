<?php
//The touch() function sets the access and modification time of the specified file.
$filename = "data1.txt";
if (touch($filename)) {
  echo $filename . " modification time has been changed to present time";
} else {
  echo "Sorry, could not change modification time of " . $filename;
}
?>