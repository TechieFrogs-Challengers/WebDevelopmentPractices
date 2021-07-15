<?php

	// Abstract class
	abstract class Base {
		function __construct() {
			echo "this is abstract class constructor ";
		}

		// This is abstract function
		abstract function printdata();
	}
	class Derived extends base {
		function __construct() {
			echo "<br> Derived class constructor";
		}
		function printdata() {
			echo "<br> Derived class printdata function";
		}
	}
	$b1 = new Derived;
	$b1->printdata();
?>
