<!DOCTYPE html>
<html>
<body>

	<?php
		class Fruit {
			  public $name;
			  public $color;
			//function __construct() {
			//		$this->name = "banana"; 
			//		$this->color = "yellow"; 
			 // }
			  function __construct($name, $color) {
				$this->name = $name; 
				$this->color = $color; 
			  }


			  function get_name() {
					return $this->name;
			  }
			  function get_color() {
					return $this->color;
			  }
		}

		//$apple1 = new Fruit();
		//echo $apple1->get_name();
		$apple = new Fruit("Apple", "red");
		echo $apple->get_name();
		echo "<br>";
		echo $apple->get_color();
	?>
 
</body>
</html>

