<?php
class Ram
{
	public $name;
	public $height;
	
	public function set_name($name)
	{
     $this->name=$name;
     //$this->height=$height;
	}
  public function get_name()
  {
	   return $this->name;
	   //echo $this->height;
  }	
  function set_height($height)
	{
     $this->height = $height;
	}
  function get_height()
  {
	  return $this->height;
  }	
}
$my =new Ram();

$my->set_name('Ram prakash');
$my->set_height('170');

echo "My name:".$my->get_name();
//var_dump($my instanceof Ram);
echo "<br> Height:".$my->get_height();

$my1 =new Ram();

$my1->set_name('Sai');
$my1->set_height('175');

echo "<br>";
echo "My name:".$my1->get_name();
//var_dump($my instanceof Ram);
echo "<br> Height:".$my1->get_height();

?>