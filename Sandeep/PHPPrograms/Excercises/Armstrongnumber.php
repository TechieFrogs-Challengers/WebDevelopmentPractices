<!DOCTYPE html>
<html>
<body>

	<?php  
		$num=342;  
		$total=0; //to store the data and add 
		
		$x=$num;  //inoder to not to modify the number we are assigning to another variable to perfrom operations
		
		while($x!=0) //loop iterates till the x i.e num will be 0 
		{  
			$rem=$x%10;  //gets the last digit in the number
			
			$total+=$rem*$rem*$rem;  //evey time the rem value will cubed and added to the total value
			
			$x=$x/10;  //every time the last digit in a number will be removed
		}  
		
		if($num==$total)  //if the taken number and the total vales are equal then its a armstrong number
		{  
			echo "$num is an Armstrong number";  
		}  
		else  //if the number and the total and not equal then its not a armstrong number
		{  
			echo "$num is not an armstrong number";  
		}  
	?>  

</body>
</html>
