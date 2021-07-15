<!DOCTYPE html>
<html>
<body>

	<?php
	class Fruit {
		  public $name;
		  function set_name($name) {
			$this->name = $name;
		  }
	}
	$apple = new Fruit();
	$apple->set_name("Apple");
	
	?>
 
</body>
</html>
