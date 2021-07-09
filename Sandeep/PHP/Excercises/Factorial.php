<!DOCTYPE html>
<html>
<body>

	<?php
		$num = 6;
		$fact = 1;//fact variablr to store every time the miltipication is done
		
		for($i=1;$i<=$num-1;$i++)//loop to iterate the from 1 to the taken number
		{
		 $fact*=($i+1); //equation for multiplying and incrementing the i value
		}
		echo "The factorial of  $num = $fact"."<br><br>";//for displaying teh result
	?>

</body>
</html>
