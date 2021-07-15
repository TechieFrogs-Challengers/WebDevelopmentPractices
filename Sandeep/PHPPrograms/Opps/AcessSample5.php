<?php  
class Acess1  
{  
protected $x=500;  
protected $y=100;  
    function add()  
{  
echo "Addition :: ";
echo $sum=$this->x+$this->y."<br/>";  
}  
    }     
class child extends Acess1  
{  
function sub()  
{  
echo "Subtraction :: ";
echo $sub=$this->x-$this->y."<br/>";  
}  
  
}     
$obj= new child;  
$obj->add();  
$obj->sub();  
  
?>  