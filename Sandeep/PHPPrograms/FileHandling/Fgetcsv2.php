<?php
$file = fopen("Contacts.cvs","r");

while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);
?>