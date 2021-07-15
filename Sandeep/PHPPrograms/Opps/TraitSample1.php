<?php
	trait message1 {
	public function msg1() {
		echo "Hello Sai Sandeep";
	  }
	}

	class Welcome {
	  use message1;
	}

	$obj = new Welcome();
	$obj->msg1();
?>