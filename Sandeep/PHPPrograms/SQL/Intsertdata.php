<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$a = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('venkat', 'kotha', 'venkat@example.com')";

	if ($conn->query($a) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $a . "<br>" . $conn->error;
	}

	$conn->close();
?>