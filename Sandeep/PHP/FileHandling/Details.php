<!DOCTYPE html>
<html>
<head>
	/*  Styles for the Table*/
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 15px;
			
			
		}
		th{
			background-color: #f1f1c1;
		}
		tr{
			background-color: skyblue;
		}
		.center {
			margin-left: auto;
			margin-right: auto;
			margin-top:150px;
		}
	</style>
</head>
<body>


	<?php
	$file_handle = fopen("DataStd.txt", "rb") or die("Unable to open file!");//opens the file if the file is present

	echo "<table class='center' width='200' border='1'>";//table open tag for creating the table

	//for the static row to display on the the 1st row i.e haedings of each column
	echo "  <tr>
				<th >Name</th>
				<th >Email</th>
				<th >City</th>
				<th >Number</th>

			</tr>";
			
			
	//loop for travesing through the end of the file i.e last line of the file	
	while (!feof($file_handle) ) {
		
		$line_of_text = fgets($file_handle);//getting each and every line
		
		$parts = explode(';', $line_of_text);//spliting the line based on the semi colum and stors in the array
		
		echo "<tr>"; //creating the dynamic row every time 
		
		for($i=0;$i<4;$i++)//for for traversing through the arry 
		{	
			$parts1 = explode(':', $parts[$i]);//agin each array elent is splited based on the colun 
			
			echo "<td>$parts1[1]</td>";//the array consists of property and value now we are printing the value
		}
		echo "</tr>";//closing of row every time
	}
	echo "</table>";//closing the table atthe end of while

	fclose($file_handle);//closing file
	?>
</body>
</html>
