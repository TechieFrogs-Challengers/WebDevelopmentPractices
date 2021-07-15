<?php
	class user{
		public $Fname;
		public $Lname;
		
		public function hello()
		{
			return "Hello,".$this->Fname.$this->Lname;
		}
	}
	$user1=new user();
	$user1->Fname="Sandeep";
	$user1->Lname="Maddipati";
	
	echo $user1->hello();

?>