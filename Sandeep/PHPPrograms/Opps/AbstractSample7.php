<?php
// Same (or a less restricted) visibility:
   abstract class AbstractBaseClass1{
      abstract public function addValue();
      abstract protected function getValue();
   }
   class ConcreteClass extends AbstractBaseClass1{
      protected function addValue() {
         return "ConcreteClass";
      }
      public function getValue() {
         return " Child Class";
      }
   }
   $classobj = new ConcreteClass;
   $classobj->addValue();
?>