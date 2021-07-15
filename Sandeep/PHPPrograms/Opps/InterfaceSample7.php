<?php
   interface a{
      public function printData();
   }
   interface b{
      public function getData();
   }
   interface c extends a, b{
      public function addData();
   }
   class d implements c{
      public function printData(){
         echo "I am printing<br>";
      }
      public function getData(){
         echo "I am reading data<br>";
      }
      public function addData(){
         echo "I am adding<br>";
      }
   }
   $myobj = new d();
   
   $myobj->getData();
   $myobj->addData();
   $myobj->printData();

?>