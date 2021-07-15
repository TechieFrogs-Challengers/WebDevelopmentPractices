<?php
   abstract class base {
      abstract function printdata();
      public function getdata() {
         echo "Hi Sai Sandeep";
      }
   }
   class child extends base{
      public function printdata(){
         echo "Good morning";
      }
   }
   $obj = new child();
   $obj->getdata();
?>