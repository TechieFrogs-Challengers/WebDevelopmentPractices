<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 30%;
}

td {
  text-align: center;
}
tr:nth-child(even) {
  background-color: skyblue;
}
th{
	background-color:yellow;
}
</style>
</head>
<body>

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

	$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<center>";
	  echo "<table ><tr><th>ID</th><th>Name</th></tr>";
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
	  }
	  echo "</table>";
	  echo "</center>";
	} else {
	  echo "0 results";
	}
	$conn->close();
?>
</body>
</html>

