<!DOCTYPE html>
<html>
<body>

	<?php  
		$main_str = "Good health Good life.";  
		$string2 = "Good health Good life.";  
		$case_insensitivity = FALSE;  
		// here, this function works as case-insensitive  
		echo substr_compare($main_str, $string2, 0, 9, TRUE). "</br>";  
	  
		// here, this function case-sensitive   
		echo substr_compare($main_str, "GOOD Health", 0, 11, $case_insensitivity). "</br>";  
	  
		//the function works as case-insensitive  
		echo substr_compare($main_str, "GOOD health", 0, 11, TRUE). "</br>";  
	?>     

</body>
</html>
