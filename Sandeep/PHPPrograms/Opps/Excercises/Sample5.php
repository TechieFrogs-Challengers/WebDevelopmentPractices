<?php
	class user {
		private $Fname; 
		private $Lname; 
			
		 public function __construct($Fname,$Lname) 
		{
			$this -> Fname = $Fname;
			$this -> Lname = $Lname;
		}
		public function getname()
		{
			return $this->Fname.$this->Lname;
		}
	}
	
	$user1=new user("Sai","Maddiapti");
	
	echo $user1->getname();
?>