<?php
    class Person {
        // first name of person
        private $fname;
        // last name of person
        private $lname;
        
        // public function to set value for fname
        public function setFName($fname) {
            $this->fname = $fname;
        }
        
        // public function to set value for lname
        public function setLName($lname) {
			//private $name;
            $this->lname = $lname;
			
        }
        
        // public function to 
        public function showName() {
            echo "My name is: " . $this->fname . " " . $this->lname;
        }
    }
	class per extends Person
	{
		public function name()
		{
				echo "Some thind";
		}
	}
    
    // creating class object
    $john = new per();
	echo $john->name();
	
    
    // trying to access private class variables
   // $john->fname = "John";  // invalid
    //$john->lname = "Wick";  // invalid
    
    // calling the public function to set fname and lname
    $john->setFName("Sai");
    $john->setLName("Sandeep");
	$john->showName();

?>