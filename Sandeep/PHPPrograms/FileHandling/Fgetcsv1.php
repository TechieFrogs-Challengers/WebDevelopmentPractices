<?php
//The fgetcsv() function parses a line from an open file, checking for CSV fields.
$file = fopen("Contacts.cvs","r");
print_r(fgetcsv($file));
fclose($file);
?>