<?php
	// Interface definition
	interface Animal {
	  public function makeSound();
	}

	// Class definitions
	class Cat implements Animal {
	  public function makeSound() {
		echo " Cat Meow <br>";
	  }
	}

	class Dog implements Animal {
	  public function makeSound() {
		echo " Dog Bark <br>";
	  }
	}

	class Mouse implements Animal {
	  public function makeSound() {
		echo " Mouse Squeak <br>";
	  }
	}

	// Create a list of animals
	$cat = new Cat();
	$dog = new Dog();
	$mouse = new Mouse();
	$animals = array($cat, $dog, $mouse);

	// Tell the animals to make a sound
	foreach($animals as $animal) {
	  $animal->makeSound();
	}
?>
