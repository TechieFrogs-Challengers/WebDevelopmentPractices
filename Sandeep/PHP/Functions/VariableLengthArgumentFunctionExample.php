<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
	<?php  
		function add(...$numbers) {  
			$sum = 0;  
			foreach ($numbers as $n) {  
				$sum += $n;  
			}  
			return $sum;  
		}  
		  
		echo add(1, 2, 3, 4,5,6,9,8,7,4,1,022);  
	?>  
</body>  
</html>  