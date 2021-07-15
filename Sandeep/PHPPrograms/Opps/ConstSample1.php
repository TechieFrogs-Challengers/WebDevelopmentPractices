<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting Vijaywada";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>