<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
echo $mango->name;
//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR
?>
 
</body>
</html>
