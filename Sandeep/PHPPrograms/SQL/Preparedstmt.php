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

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email);

	// set parameters and execute
	$firstname = "sai";
	$lastname = "sandeep";
	$email = "saisandeep@example.com";
	$stmt->execute();

	$firstname = "krishna";
	$lastname = "kanti";
	$email = "krishna@example.com";
	$stmt->execute();

	$firstname = "siva";
	$lastname = "achanta";
	$email = "sivachanta@example.com";
	$stmt->execute();

	echo "New records created successfully";

	$stmt->close();
	$conn->close();
?>