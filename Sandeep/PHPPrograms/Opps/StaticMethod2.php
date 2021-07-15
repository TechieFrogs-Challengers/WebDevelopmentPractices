<?php
class greeting {
  public static function welcome() {
    echo "Hello SAi Sandeep";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>