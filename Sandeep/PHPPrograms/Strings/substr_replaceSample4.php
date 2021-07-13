<!DOCTYPE html>
<html>
<body>

	<?php  
		$input_str =  array('X: AAAA', 'Y: AAAA', 'Z: AAAA');  
		  
		//each AAA is replaced with string BBB.  
		echo implode('; ', substr_replace($input_str, 'BBBB',3,4)). '</br>';  
		  
		$replace = array('XXXX', 'YYYY', 'ZZZZ');  
		//each AAA is replaced with different values.  
		echo implode('; ', substr_replace($input_str, $replace,3,4)). '</br>';  
	  
		//Replacement of different number of character each time  
		$length = array(2,3,4);  
		echo implode('; ', substr_replace($input_str, $replace,3,$length)). '</br>';  
	?>    

</body>
</html>
