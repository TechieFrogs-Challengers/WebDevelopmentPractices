<!DOCTYPE html>
<html>
<body>

	<?php  
		class demo  
		{  
				private $a= "hello javatpoint";  
				public function display()  
				{  
				echo $this->a;  
				}  
		}  
		$obj = new demo();  
		$obj->display();  
		var_dump($obj);  
	?>   
 
</body>
</html>
