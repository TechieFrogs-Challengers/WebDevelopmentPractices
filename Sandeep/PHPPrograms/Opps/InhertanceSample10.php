<?php

	class person
	{

		var $name;

		var $address;

		var $phone;
			
		function printPersonInf()

		{

			echo $this->name;

			echo $this->address;

			echo $this->phone;
		}

	}
		

	class employee extends person
	{

		var $occupation;

		var $com_name;

		var $buss_phone;

		function printempInfo()

		{

			parent:: printPersonInf();

			echo $this->occupation;

			echo $this->com_name;

			echo $this->buss_phone;

		}

	}
		
	$obj= new person();

	$emp=new employee();
		
	echo $emp->name="Sandeep"."<br/>";

	echo $emp->address="Mumbai"."<br/>";

	echo $emp->phone="7893421117"."<br/>";

	echo $emp->occupation="developer"."<br/>";

	echo $emp->comp_name="Tech pvt ltd"."<br/>";

	echo $emp->buss_phone="9015501123"."<br/>";
 
?>