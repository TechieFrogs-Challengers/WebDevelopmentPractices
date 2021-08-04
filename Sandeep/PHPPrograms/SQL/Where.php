<?php
	echo "<table style='border: solid 1px black;'>";

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

	$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  echo "<table border='1' style='border-collapse: collapse'cellspacing='5' cellpadding='5'><tr><th>ID</th><th>Name</th></tr>";
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
	  }
	  echo "</table>";
	} else {
	  echo "0 results";
	}
	$conn->close();
?>