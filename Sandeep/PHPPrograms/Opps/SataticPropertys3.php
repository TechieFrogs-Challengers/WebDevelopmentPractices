<?php
//To call a static property from a child class, use the parent keyword inside the child class:
	class pi {
	  public static $value=3.14159;
	}

	class x extends pi {
	  public function xStatic() {
		return parent::$value;
	  }
	}

	// Get value of static property directly via child class
	echo x::$value;

	// or get value of static property via xStatic() method
	$x = new x();
	echo $x->xStatic();
?>