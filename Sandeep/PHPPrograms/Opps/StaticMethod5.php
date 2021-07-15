<?php
/* Use static function as a counter */

class solution {
	
	static $count;
	
	public static function getCount() {
		return self::$count++;
	}
}

solution::$count = 1;

for($i = 0; $i < 5; ++$i) {
	echo 'The next value is: '.
	solution::getCount() . "<br>";
}

?>
