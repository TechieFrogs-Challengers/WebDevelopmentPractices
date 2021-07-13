<?php
    $myfile = fopen("data.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>
