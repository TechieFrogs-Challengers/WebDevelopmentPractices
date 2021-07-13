<?php
//he set_file_buffer() function specifies the number of bytes to buffer on the given file.
$file = fopen("data1.txt","w");
if ($file) {
  set_file_buffer($file,0);
  
  fwrite($file,"Hello World. Testing!");
  fclose($file);
}
?>