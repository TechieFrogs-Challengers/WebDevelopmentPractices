<!DOCTYPE html>
<html>
<body>

	<?php  
		$num = 113;  
		
		$n=$num; //assigning the taken number to another number in odered to perfrom operations
		
		$rev = 0;  
		
		while ($n > 1)  //loop iterates till the n i.e number greater than 1
		{  
			$rem = $n % 10; //gets the last digit in a number
			
			$rev = ($rev * 10) + $rem;  //here evert time the last number is stored in it i.e number is stored in a reverse order
			
			$n = ($n / 10);    //all wise removes th elast digit in the number
		}  
		echo "Reverse number of $num is: $rev";  
	?> 

</body>
</html>
