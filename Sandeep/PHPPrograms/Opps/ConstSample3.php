<?php
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "<br>";
    }
}

echo MyClass::CONSTANT . "<br>";

$classname = "MyClass";
echo $classname::CONSTANT . "<br>";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."<br>";
?>