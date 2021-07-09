<?php
   if(!file_exists("Sample.txt")) {
      die("File not found");
   }else {
      $file = fopen("Sample.txt","r");
      print "Opend file sucessfully";
   }
   // Test of the code here.
?>
