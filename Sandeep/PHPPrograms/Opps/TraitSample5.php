<?php
	//function overide
	trait HelloWorld {
		public function sayHello() {
			echo 'Hello Sai';
		}
	}

	class TheWorldIsNotEnough {
		use HelloWorld;
		public function sayHello() {
			echo 'Hello Sandeep';
		}
	}

	$o = new TheWorldIsNotEnough();
	$o->sayHello();
?>