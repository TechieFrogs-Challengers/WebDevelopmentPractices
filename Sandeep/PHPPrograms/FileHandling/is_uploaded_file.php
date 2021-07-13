<?php
//The is_uploaded_file() function checks whether the specified file is uploaded via HTTP POST.
$file = "test.txt";
if(is_uploaded_file($file)) {
  echo ("$file is uploaded via HTTP POST");
} else {
  echo ("$file is not uploaded via HTTP POST");
}
?>