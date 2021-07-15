<?php
	class user {
	  //private $username;
	  protected $username;
	 
	  public function setusername($name) 
	  {
		$this -> username = $name;
	  }
	}
	
	class admin extends user {
		public function expressYourRole()
		{
			return strtolower(__CLASS__);
		}
		public function sayhello()
		{
			return "Hello admin, " . $this -> username;//we canot acess the private variable
		}
	}
	
	$admin1=new admin();
	
	$admin1->setusername("saisandeep");
	
	echo $admin1->sayhello();
?>