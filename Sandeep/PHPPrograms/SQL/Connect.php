<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "mydb";
$con=mysqli_connect($servername,$username,$password,"$dbname");
if(!$con){
die('Could not Connect My Sql:' .mysql_error());
}
echo"Connected";
?>