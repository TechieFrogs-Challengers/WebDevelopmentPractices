<?php
	class A{
	   function test(){
		  echo "method in A class";
	   }
	}
	class B extends A{
	   function testb(){
		  echo "method in B class";
	   }
	}
	class C extends B{
	   function testc(){
		  echo "method in C class";
	   }
	}
	$obj=new C();
	$obj->test();
?>