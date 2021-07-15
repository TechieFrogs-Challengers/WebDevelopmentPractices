<?php
    // parent class
    class Human {
        // public property name
        public $name;
        
        // public function walk
        public function walk() {
            echo $this->name. " is walking...<br/>";
        }
        
        // public function see
        public function see() {
            echo $this->name. " is seeing...<br/>";
        }
    }
    
    // child class
    class Male extends Human {
		//overriding
         public function see() {
            echo $this->name. " is seeing...<br/>";
        }
    }
    
    // child class
    class Female extends Human {
		//overriding
        public function walk() {
            echo $this->name. " is walking...<br/>";
        }
    }
    
    $male = new Male();
    $male->name = "Sai";
    
    $female = new Female();
    $female->name = "Sandy";
    
    // calling Human class methods
    // check the output (hehe, pun intended)
    $female->walk();
    $male->see();
    
?>