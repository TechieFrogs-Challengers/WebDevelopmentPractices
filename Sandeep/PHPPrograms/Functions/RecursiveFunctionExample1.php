<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
	<?php    
		function display($number) {    
			if($number<=5){    
			 echo "$number <br/><br>";    
			 display($number+1);    
			}  
		}    
			
		display(1);    
	?>    
</body>  
</html>  