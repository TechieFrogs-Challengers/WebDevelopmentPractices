<?php  
    class demo  
    {  
        public function demo()  
        {  
            echo "constructor1...";  
        }  
    }  
      
    class demo1 extends demo  
    {  
        public function __construct()  
        {  
            echo parent::demo();  
            echo "constructor2...";  
        }  
    }  
    $obj= new demo1();  
?>  