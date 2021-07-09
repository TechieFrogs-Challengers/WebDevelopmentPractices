<!DOCTYPE html>
<html>
<body>

	<?php
		$year = 2001;
		
		if ($year % 400 == 0 ||$year % 4 == 0){//condition for cheking its a leap year
			print("It is a leap year");
		}
		else if ($year % 100 == 0){//codition for checking not a leap yaer
			print("It is not a leap year");
		}
		else{//if above condtions are not saticified then also its not a leap year
			print("It is not a leap year");
		}
	?>

</body>
</html>
