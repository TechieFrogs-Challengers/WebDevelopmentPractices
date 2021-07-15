<?php
	class Base {
		public function sayHello() {
			echo 'Hello ';
		}
	}

	trait SayWorld {
		public function sayHello() {
			parent::sayHello();
			echo 'Sai Sandeep';
		}
	}

	class MyHelloWorld extends Base {
		use SayWorld;
	}

	$o = new MyHelloWorld();
	$o->sayHello();
?>