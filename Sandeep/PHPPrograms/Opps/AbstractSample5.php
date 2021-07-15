<?php
    // abstract class
    abstract class Vehicle {
    
        // protected variable
        protected $name;
    
        // non-abstract public function start
        public function start() {
            echo $this->name. " - Engine start...<br>";
        }
        
        // non-abstract public function stop
        public function stop() {
            echo $this->name. " - Engine stop...<br>";
        }
        
        // non-abstract public function setName
        public function setName($name) {
            $this->name = $name;
        }
        
        // abstract function mileage
        abstract public function mileage();
            
        
    }
    
    // child class
    class Car extends Vehicle {
        
        public function mileage() {
            echo "I am " . $this->name . "<br>";
            echo "My mileage range is - 15 to 22 Km/L";
        }
        
    }
    
    // child class
    class Motorcycle extends Vehicle {
        
        public function mileage() {
            echo "I am " . $this->name . "<br>";
            echo "My mileage range is - 15 to 20 Km/L";
        }
        
    }
	
    $car = new Car();
    $car->setName("Kia Seltos");
    $car->mileage();
    
?>