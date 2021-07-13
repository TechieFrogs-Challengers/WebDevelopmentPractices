<?php
//The symlink() function creates a symbolic link from the existing target with the specified name link.
$target = "data1.php";
$link = "data";
symlink($target, $link);
echo readlink($link);
?>