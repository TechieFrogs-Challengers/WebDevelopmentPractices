<?php  
class Acess
{  
private $name="Sonoo";  
private function show()  
{  
echo "This is private method of parent class";  
}  
}     
class child extends Acess  
{  
function show1()  
{  
echo $this->name;  
}  
}     
$obj= new child;  
//$obj->show();  //error
$obj->show1();  
?> 