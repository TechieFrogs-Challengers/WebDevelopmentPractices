<!DOCTYPE html>
<html>
<body>

	<?php  
		$number = 113;  
		
		$n = $number;  //assigning the taken number to another number in odered to perfrom operations
		$rev = 0;  
		while($n!=0) {  //loop iterates till the n i.e number is 0
		
			$rem = $n % 10;  //gets the last digit in a number
			
			$rev *= 10 + $rem;  //here evert time the last number is stored in it i.e number is stored in a reverse order
			
			$n = $n/10;  //all wise removes th elast digit in the number
		}  
		 echo $rev;
		
		if($number==$rev){  //if the taken number and the rev number is same then its a palindrome number
			echo "$number is a Palindrome number";  
		} 
		else {  //if the taken number and the rev number are not  same then its not a palindrome number
			echo "$number is not a Palindrome";  
		}  
	?>  

</body>
</html>
