<?php
	class employee
	{
		public static function ename()
		{
			echo " Employee name is Sandeep";
		}
		public function __construct()
		{
			self::ename();
		}
	}
	employee::ename();
	new employee();
?>