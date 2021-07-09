<!DOCTYPE html>
<html>
<body>

	<?php  
		// main strting is greater than the second string.  
		echo substr_compare("Hello javaTpoint","Hello", 0). "</br>";  
	  
		// both strings are equal, as comparison start at 6th position.  
		echo substr_compare("Hello javaTpoint","javaTpoint", 6). "</br>";  
	  
		// main string and next comparable string are not same, so it will return -1  
		echo substr_compare("Hello javaTpoint","hie", 0). "</br>";  
	?>  

</body>
</html>
