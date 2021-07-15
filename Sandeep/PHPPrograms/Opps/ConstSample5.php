<?php// Test class
class Test {
  // aset a constant
  const PI = 3.14;

  public function getArea($raza) {
    if (is_numeric($raza)) {
      return Test::PI * pow($raza, 2);
    }
    else exit('Incorrect value for $raza');
  }
}

// include Test class

echo Test::PI;        // display the PI constant value

// create an object instance
$objTest = new Test();

// display area of the circle of radius 78, returned getArea()
echo '<br> Area = '. $objTest->getArea(78);
?>
