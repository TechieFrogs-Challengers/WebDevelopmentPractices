<?php  
    $fp = fopen('data.txt', 'a');//opens file in append mode  
    fwrite($fp, ' this is additional text ');  
    fwrite($fp, 'appending data');  
    fclose($fp);  
    
    echo "File appended successfully";  
?> 
