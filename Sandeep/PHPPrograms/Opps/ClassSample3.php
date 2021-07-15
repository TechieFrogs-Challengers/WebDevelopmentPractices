<?php
	// Include class definition
	require "Rectangle.php";
	 
	// Create multiple objects from the Rectangle class
	$obj1 = new Rectangle;
	$obj2 = new Rectangle;
	 
	// Call the methods of both the objects intilly the vales are zero
	echo $obj1->getArea(); // Output: 0
	echo $obj2->getArea(); // Output: 0
	 
	// Set $obj1 properties values
	$obj1->length = 30;
	$obj1->width = 20;
	 
	// Set $obj2 properties values
	$obj2->length = 35;
	$obj2->width = 50;
	 
	// Call the methods of both the objects again
	echo $obj1->getArea(); // Output: 600
	echo $obj2->getArea(); // Output: 1750
?>