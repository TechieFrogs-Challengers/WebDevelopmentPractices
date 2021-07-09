<!DOCTYPE html>
<html>
<body>

	<?php  
		$number=5;
		
		for($i=1; $i<=$number; $i++){   //loop for rows
		
		for($j=1; $j<=$i; $j++){  //loop for colums 
		echo ' * ';   
		}  
		echo '<br>';   //after every row iteration it starts from th enew line
		}  
		for($i=$number; $i>=1; $i--){    //loop for rows
		for($j=1; $j<=$i; $j++){  //loop for colums 
		echo ' * ';   
		}   
		echo '<br>';   //after every row iteration it starts from th enew line
		}   
	?>  
	
</body>
</html>
