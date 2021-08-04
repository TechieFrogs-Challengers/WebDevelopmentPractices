<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => regData
        $conn = mysqli_connect("localhost", "root", "", "regData");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 9 values from the form data(input)
        $user_id =  $_REQUEST['userid'];
        $password = $_REQUEST['passid'];
        $name =  $_REQUEST['username'];
        $address = $_REQUEST['address'];
		$country = $_REQUEST['country'];
		$zip = $_REQUEST['zip'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $desc = $_REQUEST['desc'];
		
		
          
        // Performing insert query execution
        // here our table name is data
        $sql = "INSERT INTO data  VALUES ('$user_id', 
            '$password','$name','$address','$country','$zip','$email','$gender','$desc')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n $user_id\n $name\n $address\n $country\n $zip\n $email\n $gender");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>