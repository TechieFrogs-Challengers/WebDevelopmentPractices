<!DOCTYPE html>
<html>
<body>

	<?php  
		//replacement from the front of string  
		$replace1 = substr_replace("Hello javatpoint", "PHP", 6);  
		echo $replace1;  
		//replacement from end of the string  
		$replace2 = substr_replace("Hello javatpoint", "PHP", -10);  
		echo $replace2;  
	?>  

</body>
</html>
