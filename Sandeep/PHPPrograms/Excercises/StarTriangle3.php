<!DOCTYPE html>
<html>
<body>

	<?php  
		$number=5;
		
		for($i=0;$i<=$number;$i++){  //loop iterates the roows
		
			for($k=$number;$k>=$i;$k--){  //loop for creating the space
				echo "&nbsp&nbsp";  
			}  
			for($j=1;$j<=$i;$j++){  //loop cretas the coloms in the rows
				echo "*&nbsp";  
			}  
			echo "<br>";  //after every row it goes to the next row
		}  
		for($i=$number-1;$i>=1;$i--){  //loop iterates the rowa
		
			for($k=$number;$k>=$i;$k--){  //loop cretas the coloms in the rows
				echo "&nbsp";  
			}  
			for($j=1;$j<=$i;$j++){  //loop cretas the coloms in the rows
				echo "*&nbsp";  
			}  
			echo "<br>";  //after every row it goes to the next row
		}  
	?>    
	
</body>
</html>
