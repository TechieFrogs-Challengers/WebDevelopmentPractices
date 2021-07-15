<?php
	class testclass{
	   static $count=0;
	   function __construct(){
		  self::$count++;
	   }
	   static function showcount(){
		  echo "count = " . self::$count;
	   }
	}
	$a=new testclass();
	$b=new testclass();
	$c=new testclass();
	testclass::showcount();
?>