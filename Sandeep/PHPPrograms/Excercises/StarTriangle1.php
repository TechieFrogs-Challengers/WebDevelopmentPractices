<!DOCTYPE html>
<html>
<body>

	<?php  

		$number=5;

		for($i=0;$i<=$number;$i++){  //loop for iterating the number of rows

			for($j=$number-$i;$j>=1;$j--){  //loop for iterating every coloum i.e here colums are started from 5 

				echo "* ";  
			}  
			echo "<br>";  //after completeing every row again starts from new row
		}  
	?>  
	
</body>
</html>
