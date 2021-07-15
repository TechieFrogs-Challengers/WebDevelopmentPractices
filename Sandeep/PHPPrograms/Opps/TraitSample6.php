<?php
	//definition of trait
	trait testtrait{
	   public function test1(){
		  echo "test1 method in trait<br>";
	   }
	   public function test2(){
		  echo "test2 method in trait<br>";
	   }
	}
	//using trait
	class testclass{
	   use testtrait;
	   public function test1(){
		  echo "test1 method overridden<br>";
	   }
	}
	$obj=new testclass();
	$obj->test1();
	$obj->test2();
?>