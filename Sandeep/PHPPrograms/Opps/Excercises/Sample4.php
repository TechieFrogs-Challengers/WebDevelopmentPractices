<?php
	class user{
		private $Fname;
		
		public function setFname($name)
		{
			$this->Fname=$name;
		}
		
		public function getname()
		{
			return $this->Fname;
		}
	}
	
	
	$user1=new user();
	$user1->setFname("Sandeep");
	echo "Name Is ::".$user1->getname();
	
?>