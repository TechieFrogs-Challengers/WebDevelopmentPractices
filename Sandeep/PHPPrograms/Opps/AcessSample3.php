<?php  
class demo  
{  
public $name="Sandeep";  
function disp()  
{  
echo $this->name."<br/>";  
}  
}  
class child extends demo  
{  
function show()  
{  
echo $this->name;  
}  
}     
$obj= new child;  
echo $obj->name."<br/>";     
$obj->disp();  
$obj->show();  
?>  