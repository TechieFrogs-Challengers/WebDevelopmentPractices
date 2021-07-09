<!DOCTYPE html>
<html>
<body>

	<?php  
		$a=5;  
		$b=10;  
		
		echo "before Swapping The Values Are<br><br>";
		echo "Value of a is : $a<br><br>";  
		echo "Value of b: $b  <br><br><br>";
		//By using arithmetic operation we swap variables 
		
		$a=$a+$b;  //5+10=15 i.e a = 15
		
		$b=$a-$b;  //15-10=5 i.e b = 5
		
		$a=$a-$b;  //15-5=10 i.e a=10
		
		echo "After Swapping The Values Are<br><br>";
		echo "Value of a is : $a<br><br>";  
		echo "Value of b: $b  ";  
	?>  

</body>
</html>
