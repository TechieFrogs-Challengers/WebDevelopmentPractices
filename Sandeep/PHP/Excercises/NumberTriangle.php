<!DOCTYPE html>
<html>
<body>

	<?php
	$num = 6;

	// Outer loop handles number of rows
	for ($i = 1; $i <= $num; $i++)
	{
		// inner loop handles indentation
		for($k = $num; $k > $i; $k-- )
		{
			// Print spaces
			echo "&nbsp&nbsp&nbsp";
		}
		// inner loop handles number of stars
		for($j = 1; $j <= $i; $j++ )
		{
			// Print number
			echo $j."&nbsp";
		}
		for($j = $i-1; $j >= 1; $j-- )
		{
			// Print number
			echo $j."&nbsp";
		}
		// go to new line after each row pattern is printed
		echo "<br>";
	}

	?>

	
</body>
</html>
