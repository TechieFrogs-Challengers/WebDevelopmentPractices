<?php
//Create connection
$conn = new mysqli('localhost','root','','mydb');
//Test connection
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
//Create data table
$sql = "CREATE TABLE login(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
confirm VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8";

if($conn->query($sql) === TRUE){
    echo 'Data table created successfully';
}else{
    echo 'Data table creation failed:'.$conn->error;
}
$conn->close();
?>