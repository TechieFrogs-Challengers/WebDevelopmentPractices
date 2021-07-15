<?php
//Any class that contains at least one abstract method must be declared as abstract class:
   class AbstractClass {
      abstract protected function getValue();
      public function printData() {
         echo " Welcome to Tutorials Point";
      }
   }
   $obj=new AbstractClass();
   $obj->printData();
?>