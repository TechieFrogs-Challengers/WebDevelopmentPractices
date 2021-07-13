<!DOCTYPE html>
<html>
<body>

	<?php  
		$main_str = "Good health Good life.";  
		$string2 = "Good health Good life.";  
		// both strings are equal to each other.  
		echo substr_compare($main_str, $string2, 0). "</br>";  
	  
		// the main string is 11 chracters greater than string2 including whitespace.  
		echo substr_compare($main_str, "Good health", 0). "</br>";  
	  
		// the main string is 5 characters shorter than string2 including whitespace.  
		echo substr_compare($main_str, "Good health Good life. Good", 0). "</br>";  
	?>  

</body>
</html>
