<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
	<?php  
		function add($n1=10,$n2=10){  
		$n3=$n1+$n2;  
		echo "Addition is: $n3<br/><br>";  
		}  
		add();  
		add(20);  
		add(40,40);  
	?>  
</body>  
</html>  