<?php
//The fstat() function returns information about an open file.
$file = fopen("Contacts.txt","r");
print_r(fstat($file));
fclose($file);
?>