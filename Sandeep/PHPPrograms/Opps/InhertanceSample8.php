<?php
//if we will try to override a final method.
    // parent class
    class Vehicle {
        // public property name
        public $name;
        
        // public method
        final public function drive() {
            echo "Vehicle class drive method...<br/>";
        }
    }
    
    // child class
    class Car extends Vehicle {
        
        public function drive() {
            echo "Car class drive method...<br/>";
        }
        
    }
    
    $car = new Car();
    $car->name = "Mercedes benz";
    
    // calling child class method
    $car->drive();
    
?>