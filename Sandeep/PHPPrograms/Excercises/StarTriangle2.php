<!DOCTYPE html>
<html>
<body>

	<?php  

		$number=5;

		for($i=0;$i<=$number;$i++){  //loop for iterating the number of rows

			for($j=1;$j<=$i;$j++){  //loop for iterating every coloum 

				echo "* ";  
			}  
			echo "<br>";  //after completeing every row again starts from new row
		}  
	?>  
	
</body>
</html>
