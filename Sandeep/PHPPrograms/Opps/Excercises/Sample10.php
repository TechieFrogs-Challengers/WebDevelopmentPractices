<?php
	interface User {
	  public function setUsername($username);
	  public function getUsername();
		 
	  public function setGender($gender);
	  public function getGender();
	}

	class Commentator implements User {
	  protected $username = '';
	  protected $gender  = 'none of your business!';
		 
	  // Set and get the $username
	  public function setUsername($name)
	  {
		$this -> username = (is_string($name))? $name : 'N/A';
	  }
	 
	  public function getUsername()
	  {
		return $this -> username;
	  } 
	 
	  // Set and get the gender.
	  public function setGender($gender)
	  {
		$gendersArray = array('female', 'male', 'other');
	 
		if(in_array($gender, $gendersArray))
		{
		  $this -> gender = $gender;
		} 
	  }
	 
	  public function getGender()
	  {
	  return $this -> gender;
	  }
	}
	
	function addMrOrMrsToUsername(User $user)
	{
		$userName   = $user -> getUsername();
		$userGender = $user -> getGender();
		  
		if($userGender === 'female')
		{
			return "Mrs. " . $userName;
		}
		 else if($userGender === 'male')
		{
			return "Mr. " . $userName;
		}
				
		return $userName;
	}
		
	$user1 = new Commentator();
	$user1 -> setUsername("Sai");
	$user1 -> setGender("male");
	echo addMrOrMrsToUsername($user1)."<br>";
	 
	$user2 = new Commentator();
	$user2 -> setUsername("Sandy");
	$user2 -> setGender("female");
	echo addMrOrMrsToUsername($user2);
	?>