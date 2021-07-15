<?php
	abstract class user {
	  protected $username;
	  
	  abstract public function stateYourRole();
	  
	  public function setUsername($name)
	  {
		$this -> username = $name;
	  }
	 
	  public function getUsername()
	  {
		return $this -> username;
	  }
	 
	}
	class admin extends user {
		public function stateYourRole()
		{
		return "admin";
		}
	}
	class viewer extends user {
		public function stateYourRole()
		{
			return strtolower(__CLASS__);
		}
	}
	
	$admin1 = new admin();
	$admin1 -> setUsername("SaiSandeep");
	echo $admin1 -> stateYourRole();
?>