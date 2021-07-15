<!DOCTYPE html>
<html>
<body>

	<?php
	class Fruit {
		  // Properties
		  public $name;
		  public $color;

		  // Methods
		  function set_name($name) {
			$this->name = $name;
		  }
		  function get_name() {
			return $this->name;
		  }
	}

	$apple = new Fruit();
	$mangp;
	var_dump($apple instanceof Fruit);
	?>
 
</body>
</html>
