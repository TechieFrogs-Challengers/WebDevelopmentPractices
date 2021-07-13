<!DOCTYPE html>  
<html>  
<head>  
    <title>Parameter Addition and Subtraction Example</title>  
</head>  
<body>  
	<?php  
		function adder($str2)  
		{  
			$str2 .= 'Call By Value';  
		}  
		$str = 'Hello ';  
		adder($str);  
		//adder($str2);
		echo $str;  
		//echo $str2;
	?>  
</body>  
</html>  