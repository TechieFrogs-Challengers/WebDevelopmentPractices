<!DOCTYPE html>
<html>
<body>

	<?php
		function check_prime($num)//function for checking the number is prime or not
		{
		   if ($num == 1)//if number is 1 then 1 is a prime number because it is divisible by its self only
		   return 0;
		   for ($i = 2; $i <= $num/2; $i++)//traversing from the number 2 to taken number
		   {
			  if ($num % $i == 0)//if number is divisble by any number between 2 to taken number then its not a prime number
			  return 0;
		   }
		   return 1;//if number is not divisible any number from 2 to given number then its a prime number
		}
		$num = 57;
		$flag = check_prime($num);//calling the function
		
		if ($flag == 1)//if flag value is 1 then we print prime number
		   echo "$num is a <strong>prime number</Strong>";
		   
		else//else if flag is other than 0 then we print its not a prime number
		   echo "$num is <strong>not a prime number</Strong>"
	?>

</body>
</html>
