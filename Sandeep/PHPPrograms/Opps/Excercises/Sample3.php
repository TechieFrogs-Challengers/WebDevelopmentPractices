<?php
	class user{
		public $Fname;

		
		public function hello()
		{
			echo "Hello,".$this->Fname;
			return $this;
		}
		public function register()
		{
			echo ">>Registered";
			return $this;
		}
		public function mail1()
		{
			echo ">>Mail Sent";
		}
	}
	$user1=new user();
	$user1->Fname="Sandeep";
	
	$user1->hello()->register()->mail1();

?>