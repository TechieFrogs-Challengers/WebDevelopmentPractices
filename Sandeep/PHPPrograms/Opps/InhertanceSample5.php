<?php
//Child Class with its Own Methods and Properties
    // parent class
    class Vehicle {
        // public property name
        public $name;
        
        // public function start
        public function start() {
            echo $this->name. " - Engine start...<br/>";
        }
        
        // public function stop
        public function stop() {
            echo "<br>".$this->name. " - Engine stop...<br/>";
        }
    }
    
    // child class
    class Car extends Vehicle {
        
        public function drive() {
            echo "I am " . $this->name . "<br/>";
            echo "Lets go on a drive...";
        }
        
    }
    
    // child class
    class Motorcycle extends Vehicle {
        
        // motorcycle specific properties
        // and methods
        
    }
    
    $car = new Car();
    $car->name = "Sai Sandeep";
    
    // calling parent class method
    $car->start();
    
    // calling child class method
    $car->drive();
	
	// calling parent class method
	$car->stop();
    
?>