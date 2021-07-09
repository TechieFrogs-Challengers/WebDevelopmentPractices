<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
	<?php  
		function adder(&$str2)  
		{  
			$str2 .= 'Call By Reference';  
		}  
		$str = 'This is ';  
		adder($str);  
		echo $str;  
	?>  
</body>  
</html>  