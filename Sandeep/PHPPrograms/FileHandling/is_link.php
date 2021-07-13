<?php
//The is_link() function checks whether the specified filename is a symbolic link.
$link = "data";
if(is_link($link)) {
  echo ("$link is a link");
} else {
  echo ("$link is not a link");
}
?>