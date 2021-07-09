<!DOCTYPE html>
<html>
<body>
	<?php   
		echo "<h3>Example for __DIR__</h3>";    
		//print full path of directory where script will be placed    
		echo __DIR__ . "<br><br>";  
		//below output will equivalent to above one.  
		echo dirname(__FILE__) . "<br><br>";    
	?>  
</body>
</html>
