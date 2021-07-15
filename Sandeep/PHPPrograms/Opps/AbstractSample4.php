<?php
//Non Abstract Method in Abstract Class
    // abstract class
    abstract class Vehicle {
    
        // protected variable
        protected $name;
    
        // non-abstract public function start
        public function start() {
            echo $this->name. " - Engine start...<br/>";
        }
        
        // non-abstract public function stop
        public function stop() {
            echo $this->name. " - Engine stop...<br/>";
        }
        
        // non-abstract public function setName
        public function setName($name) {
            $this->name = $name;
        }
        
        // abstract function mileage
        abstract public function mileage() {
            
        }
    }
    
?>