<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

	<?php 

		function addNumbers(float $a, float $b) : int {
		  return (int)($a + $b);
		}
		echo addNumbers(1.2, 5.2); 

	?>

</body>
</html>
