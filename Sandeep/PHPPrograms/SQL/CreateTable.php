<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "regData";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// sql to create table
	$sql = "CREATE TABLE data (

	username VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	name VARCHAR(30) NOT NULL,
	address VARCHAR(70) NOT NULL,
	country VARCHAR(30) NOT NULL,
	zipcode INT(6) NOT NULL,
	email VARCHAR(50) NOT NULL,
	gender VARCHAR(30) NOT NULL,
	about VARCHAR(300) NOT NULL)";

	if ($conn->query($sql) === TRUE) {
	  echo "Table data created successfully";
	} else {
	  echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>