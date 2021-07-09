<!DOCTYPE html>
<html>
<body>

	<?php  
		$num = 624;  
		$sum=0; $rem=0;  
		  for ($i =0; $i<=strlen($num);$i++)  
		 {  
		  $rem=$num%10; //to get the first digit in a number
		   $sum = $sum + $rem;  //after getting the 1st digit it adds to the sum
		   $num=$num/10;  //foe removing the 1st didgit 
		  }  
		 echo "Sum of digits of number :: $num is :: $sum";  
	?>  
</body>
</html>
