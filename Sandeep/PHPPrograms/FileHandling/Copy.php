<?php
    copy('data.txt', 'data1.txt') or die("Could not copy file");
    echo "File successfully copied to 'data1.txt'"; 
	
	copy('data1.txt', 'data2.txt') or die("Could not copy file");
    echo "File successfully copied to 'data1.txt'"; 
?>
