<!DOCTYPE html>
<html>
<body>

	<?php    
		$emp = array  
		  (  
		  array(12584,"Sandeep",400000),  
		  array(65496,"Sai",500000),  
		  array(89516,"Krishna",300000)  
		  );  
		  
		for ($row = 0; $row < 3; $row++) {  
		  for ($col = 0; $col < 3; $col++) {  
			echo $emp[$row][$col]."  ";  
		  }  
		  echo "<br/><br>";  
		}  
	?>    

</body>
</html>
