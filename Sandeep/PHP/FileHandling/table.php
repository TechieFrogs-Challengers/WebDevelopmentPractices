<!DOCTYPE html>
<html>

<body>


<?php
$file_handle = fopen("DataStd.txt", "rb") or die("Unable to open file!");;

echo "<table class='center' width='200' border='1'>";

echo "   <tr>
			<th >Name</th>
			<th >Email</th>
			<th >City</th>
			<th >Number</th>

		</tr>";
		
while (!feof($file_handle) ) {
	
    $line_of_text = fgets($file_handle);
	
    $parts = explode(';', $line_of_text);
	echo "<tr>";

			echo "<td>$parts[0]</td>";
			echo "<td>$parts[1]</td>";
			echo "<td>$parts[2]</td>";
			echo "<td>$parts[3]</td>";
	echo "</tr>";
}
echo "</table>";
fclose($file_handle);
?>
</body>
</html>
