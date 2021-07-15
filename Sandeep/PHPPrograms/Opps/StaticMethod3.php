<?php
//Static methods can also be called from methods in other classes. To do this, the static method should be public:
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}
?>