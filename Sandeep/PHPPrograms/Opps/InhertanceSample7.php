<?php
//Overriding Parent class Method
    // parent class
    class Vehicle {
        // public property name
        public $name;
        
        // public method
        public function drive() {
            echo "Vehicle class drive method...<br/>";
        }
    }
    
    // child class
    class Car extends Vehicle {
        
        public function drive() {
            echo "Car $this->name class drive method...<br/>";
        }
        
    }
    
    // child class
    class Motorcycle extends Vehicle {
        
        public function drive() {
            echo "Motorcycle $this->name class drive method...<br/>";
        }
        
    }
    
    $car = new Car();
    $car->name = "KIA";
    
    // calling child class method
    $car->drive();
    
    $bike = new Motorcycle();
    $bike->name = "BMW";
    
    // calling child class method
    $bike->drive();
    
?>