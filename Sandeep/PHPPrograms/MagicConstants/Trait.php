<!DOCTYPE html>
<html>
<body>
	<?php   
		echo "<h3>Example for __TRAIT__</h3>";    
		trait created_trait {    
			function jtp(){    
				//will print name of the trait i.e; created_trait    
				echo __TRAIT__;  
			}    
		}    
		class Company {    
			use created_trait;    
			}    
		$a = new Company;    
		$a->jtp();    
	?>  
</body>
</html>
