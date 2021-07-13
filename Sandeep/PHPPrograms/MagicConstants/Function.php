<!DOCTYPE html>
<html>
<body>
	<?php   
		echo "<h3>Example for __FUNCTION__</h3>";    
		//Using magic constant inside function.    
		function test(){    
			//print the function name i.e; test.   
			echo 'The function name is '. __FUNCTION__ . "<br><br>";   
		}    
		test();    
		  
		//Magic constant used outside function gives the blank output.    
		function test_function(){    
			echo 'Test';    
		}    
		test_function();    
		//give the blank output.   
		echo  __FUNCTION__ . "<br><br>";  
	?>    
</body>
</html>
