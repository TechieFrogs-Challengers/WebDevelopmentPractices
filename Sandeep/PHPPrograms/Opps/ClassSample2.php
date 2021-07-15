<?php
	// Include class definition
	require "Rectangle.php";
	 
	// Create a new object from Rectangle class
	$obj = new Rectangle;
	 
	// Get the object properties values intially the vales will be zero
	echo $obj->length; // 0utput: 0+
	echo "<br>";
	echo $obj->width; // 0utput: 0
	echo "<br><br>";
	
	 
	// Set object properties values
	$obj->length = 30;
	$obj->width = 20;
	 
	// Read the object properties values again to show the change
	echo "The Length is :: ".$obj->length; // 0utput: 30
	echo "<br>The Width is :: ".$obj->width; // 0utput: 20
	echo "<br><br>";
	 
	 
	// Call the object methods
	echo "The Perimeter is :: ".$obj->getPerimeter(); // 0utput: 100
	echo "<br>The Area is :: ".$obj->getArea(); // Output: 600
?>