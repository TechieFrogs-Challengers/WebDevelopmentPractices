<?php
	class parentclass{
	   public function publicmethod(){
		  echo "This is public method of parent class\n" ;
	   }
	   protected function protectedmethod(){
		  echo "This is protected method of parent class\n" ;
	   }
	   private function privatemethod(){
		  echo "This is private method of parent class\n" ;
	   }
	}
	class childclass extends parentclass{
	   public function childmethod(){
		   echo "This IS a Child Method<br>";
		   
		  $this->protectedmethod();
		  //$this->privatemethod(); //this will produce error because private method cannot be extended
	   }
	}
	$obj=new childclass();
	$obj->publicmethod();
	echo "<br>";
	$obj->childmethod();
?>