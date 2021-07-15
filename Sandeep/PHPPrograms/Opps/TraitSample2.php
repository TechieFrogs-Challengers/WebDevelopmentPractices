<?php
trait message1 {
  public function msg1() {
    echo "Hello Sai Sandeep";
  }
}

trait message2 {
  public function msg2() {
    echo "Hello M S V K Sandeep";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
//$obj->msg2();//error
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>