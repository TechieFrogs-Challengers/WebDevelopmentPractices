<?php  
    interface i1  
    {  
        public function fun1();  
    }  
    interface i2  
    {  
        public function fun2();  
    }  
class cls1 implements i1,i2  
{  
    function fun1()  
    {  
        echo "GOod Morning";  
    }  
    function fun2()  
    {  
        echo "Sai Sandeep";  
    }  
}  
$obj= new cls1();  
$obj->fun1();  
$obj->fun2();  
  
?>  