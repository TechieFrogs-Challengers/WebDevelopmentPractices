<!DOCTYPE html>
<html>
<body>

	<?php  
		// both strings are equal from position 0 to 4.  
		echo substr_compare("Hello javaTpoint","Hello", 0, 4). "</br>";  
	  
		// second string is not found between 6 to 10 position, because by default it is case-sensitive.  
		echo substr_compare("Hello javaTpoint","JAVATPOINT", 6, 10). "</br>";  
	  
		//As Hello is present in the string, but not found between 5 to 14 range.  
		echo substr_compare("Hello javaTpoint","Hello", 5, 14). "</br>";  
	?>   

</body>
</html>
