<!DOCTYPE html>
<html>
<body>

	<?php
		// Check if the variable is numeric   
		$x = 5985;
		echo "Is Numeric ? :: ";
		var_dump(is_numeric($x));

		echo "<br><br>";

		$x = "5985";
		echo "Is Numeric ? :: ";
		var_dump(is_numeric($x));

		echo "<br><br>";

		$x = "59.85" + 100;
		echo "Is Numeric ? :: ";
		var_dump(is_numeric($x));

		echo "<br><br>";

		$x = "Hello";
		echo "Is Numeric ? :: ";
		var_dump(is_numeric($x));
	?>  

</body>
</html>
