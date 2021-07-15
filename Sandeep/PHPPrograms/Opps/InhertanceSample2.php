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
	   public function publicmethod(){
		  echo "public method of parent class is overridden in child class\n" ;
	   }
	}
	$obj=new childclass();
	$obj->publicmethod();
?>