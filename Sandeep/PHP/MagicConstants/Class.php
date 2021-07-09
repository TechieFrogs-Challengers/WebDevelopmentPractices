<!DOCTYPE html>
<html>
<body>
	<?php   
		echo "<h3>Example for __CLASS__</h3>";    
		class JTP    
		{    
			public function __construct() {    
				;    
		}    
		function getClassName(){    
			//print name of the class JTP.   
			echo __CLASS__ . "<br><br>";   
			}    
		}    
		$t = new JTP;    
		$t->getClassName();    
		  
		//in case of multiple classes   
		class base  
		{    
		function test_first(){    
				//will always print parent class which is base here.    
				echo __CLASS__;   
			}    
		}    
		class child extends base    
		{    
			public function __construct() {    
				;    
			}    
		}    
		$t = new child;    
		$t->test_first();    
	?>  
</body>
</html>
