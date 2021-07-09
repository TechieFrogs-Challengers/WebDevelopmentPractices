<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
	<?php  
			//Adding two numbers  
			 function add($x, $y) {  
				$sum = $x + $y;  
				echo "Sum of two numbers is = $sum <br><br>";  
			 }   
			 add(467, 943);  
	  
			 //Subtracting two numbers  
			 function sub($x, $y) {  
				$diff = $x - $y;  
				echo "Difference between two numbers is = $diff";  
			 }   
			 sub(943, 467);  
	?>  
</body>  
</html>  