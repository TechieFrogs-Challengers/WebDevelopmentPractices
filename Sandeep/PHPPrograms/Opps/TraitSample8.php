<?php
	//definition of trait
	trait mytrait{
	   public function test1(){
		  echo "test1 method in trait1<br>";
	   }
	}
	class myclass{
	   public function test2(){
		  echo "test2 method in parent class<br>";
	   }
	}
	interface myinterface{
	   public function test3();
	}
	//using trait and parent class
	class testclass extends myclass implements myinterface{
	   use mytrait;
	   public function test3(){
		  echo "implementation of test3 method<br>";
	   }
	}
	$obj=new testclass();
	$obj->test1();
	$obj->test2();
	$obj->test3();
?>