<!DOCTYPE html>
<html>
<body>

	<?php  
		$str = "amit";
		
		$length = strlen($str);  //geting the length of a string
		
		for ($i=$length-1 ; $i >= 0 ; $i--)   //based on the leng of the string iam printing the staring from the last
		{  
		  echo $str[$i];  
		}  
	?> 

</body>
</html>
