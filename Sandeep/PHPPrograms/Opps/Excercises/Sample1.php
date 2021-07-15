<?php
	class user{
		public $Fname;
		public $Lname;
		
		public function hello()
		{
			return "Hello";
		}
	}
	$user1=new user();
	$user1->Fname="Sai";
	$user1->Lname="Sandeep";
	
	echo $user1->hello()."<br>First Name :: ".$user1->Fname."<br>Last Name :: ".$user1->Lname;
	
	$user2=new user();
	$user2->Fname="Krishna";
	$user2->Lname="Maddipati";
	
	echo "<br><br><br>".$user2->hello()." First Name :: ".$user2->Fname."<br>".$user2->hello()." Last Name :: ".$user2->Lname;
?>