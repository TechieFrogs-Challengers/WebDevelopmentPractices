<?php

// writing file contents on the output
// buffer using readfile() function
$myfile = @readfile("data1.txt");
if (!$myfile)
{
print "File could not be opened";
}
?>
