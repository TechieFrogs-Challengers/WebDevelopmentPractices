<?php  
//if doesnt implents these any one method then its a error
    interface a  
    {  
        public function dis1();  
    }  
    interface b  
    {  
        public function dis2();  
    }  
  
class demo implements a,b  
{  
    public function dis1()  
    {  
        echo "method 1...";  
    }   
}  
$obj= new demo();  
$obj->dis1();  
$obj->dis2();  
  
?>  