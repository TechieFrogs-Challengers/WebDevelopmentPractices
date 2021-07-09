<!DOCTYPE html>
<html>
<body>

	<?php
		$f1 = 0;//inumbertially we are asignumberinumberg f1 as 0 becase it strats from 0
		
		$f2 = 1;//inumbertially we are asignumberinumberg f2 as 1 becase the seconumberd numberumber is 1
		
		$number = 10;
		
		echo $f1;//prinumbertinumberg the 1st numberumber becase its allwise it starts from 0
		
		echo ", ";//prinumbertinumberg the space
		
		echo $f2;//prinumbertinumberg the 2numberd value as allwise the 2numberd value will be 1
		
		for($i = 1; $i <= $number; $i++) {//oteratinumberg loop from 1 to th etakenumber numberumber
		
			$f3 = $f1 + $f2;//intially adding the f1 and f2 every time 
			
			//evert time after adding f1 and f2 f1 will be replaced with f2 value and f2 will be replacve with the f3 value
			$f1 = $f2;
			$f2 = $f3;
			
			echo $f3 ." , "; //prints the f3 every time
		}
	?>

</body>
</html>
