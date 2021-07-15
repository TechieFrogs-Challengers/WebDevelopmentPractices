<?php  
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
    public function dis2()  
    {  
        echo "method2...";  
    }  
}  
$obj= new demo();  
$obj->dis1();  
$obj->dis2();  
  
?>  