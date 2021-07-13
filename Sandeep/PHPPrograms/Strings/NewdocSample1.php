<!DOCTYPE html>
<html>
<body>

	<?php  
			$str = <<<'DEMO'  
			Welcome to javaTpoint.  
				   Learn with newdoc example.  
		DEMO;  
		echo $str;  
		echo '</br>';  
		  
		echo <<< 'Demo'    // Here we are not storing string content in variable str.  
			Welcome to javaTpoint.  
				   Learn with newdoc example.  
		Demo;  
	?>        
			
</body>
</html>
