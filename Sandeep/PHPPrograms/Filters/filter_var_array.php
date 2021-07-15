<?php
	$data = array(
	  'fullname' => 'Peter Griffin',
	  'age' => '41',
	  'email' => 'peter@example.com',
	);

	$mydata = filter_var_array($data);
	var_dump($mydata);

?>