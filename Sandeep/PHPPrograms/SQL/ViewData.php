<?php
	//require('dbconnection.php');
	// servername => localhost
    // username => root
    // password => empty
    // database name => regData
    $conn = mysqli_connect("localhost", "root", "", "regData");
        
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    <script>
        function checkdelete(){
            return confirm('Are you sure you want to delete the Registration?');
        }
    </script> 
    <div class="form" style="width:100%">
     <button class="btn"><a href="RegestrationForm.php"><i class="fa fa-plus"></i> New Registration</a></button> 
    
    <h2>List of Data:</h2>
    <table width="100%" border="2">
    <thead>
    <tr>
		<th><strong>Id</strong></th>
        <th><strong>User Name</strong></th>
		<th><strong>Password</strong></th>
        <th><strong>Name</strong></th>
        <th><strong></i> Address</strong></th>
        <th><strong>Country</strong></th>
        <th><strong>Zip Code</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Gender</strong></th>
		<th><strong>Description</strong></th>
        <th colspan="3" align="center"><strong>Actions</strong></th>
    </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $sel_query="SELECT `username`,`password`, `name`, `address`, `country`, `zipcode`, `email`, `gender`,`about` FROM `data`";
        $result = mysqli_query($conn,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr><td align="center"><?php echo $count; ?></td>
			
            <td align="center"><?php echo $row["username"]; ?></td>
			<td align="center"><?php echo $row["password"]; ?></td>
            <td align="center"><?php echo $row["name"]; ?></td>
			<td align="center"><?php echo $row["address"]; ?></td>
            <td align="center"><?php echo $row["country"]; ?></td>
            <td align="center"><?php echo $row["zipcode"]; ?></td>
            <td align="center"><?php echo $row["email"]; ?></td>
            <td align="center"><?php echo $row["gender"]; ?></td>
			<td align="center"><?php echo $row["about"]; ?></td>
			
            <td align="center">
            <button class="btntd"><a href="EditData.php?userid=<?php echo $row["username"]; ?>&passid=<?php echo $row['password']; ?>&username=<?php echo $row["name"]; ?>
			&address=<?php echo $row['address'];?>&country=<?php echo $row['country'];?>&zip=<?php echo $row['zipcode'];?>
            &email=<?php echo $row['email'];?>&gender=<?php echo $row['gender'];?>&desc=<?php echo $row['about'];?>"><i class="fa fa-edit"></i> Edit</a></button>
            </td>
            <td align="center">
            <button class="btndel"><a href="deleteData.php?userid=<?php echo $row["username"]; ?>" onclick="return checkdelete()"><i class="fa fa-trash"></i> Delete</a></button>
            </td>
            </tr>
            <?php 
            $count++; 
        } ?>
    </tbody>
    </table>
    </div>
    </body>
</html>