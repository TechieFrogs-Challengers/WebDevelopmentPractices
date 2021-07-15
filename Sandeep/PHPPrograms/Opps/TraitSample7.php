<?php
//definition of trait
trait testtrait{
   public function test1(){
      echo "test1 method in trait<br>";
   }
}
//parent class
class parentclass{
   public function test2(){
      echo "test2 method in parent<bt>";
   }
}
//using trait and parent class
class childclass extends parentclass{
   use testtrait;
   public function test1(){
      echo "parent method overridden<br>";
   }
   public function test2(){
      echo "trait method overridden<br>";
   }
}
$obj=new childclass();
$obj->test1();
$obj->test2();
?>