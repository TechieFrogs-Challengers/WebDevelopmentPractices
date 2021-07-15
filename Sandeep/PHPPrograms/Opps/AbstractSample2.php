<?php

	// Abstract class
	abstract class Base {
		// This is abstract function
		abstract function printdata();
	}
	class Derived extends base {
		function printdata() {
			echo "Derived class";
		}
	}

	// Uncommenting the following line will
	// cause compiler error as the line tries
	// to create an instance of abstract class.
	// $b = new Base();
		
	$b1 = new Derived;
	$b1->printdata();
?>
