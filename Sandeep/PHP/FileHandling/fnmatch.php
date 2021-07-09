<?php
//The fnmatch() function checks if a string or filename matches the given shell wildcard pattern
$txt = "My car is a dark color";
if (fnmatch("*col[ou]r",$txt))
  {
  echo "hmm...";
  }
?>