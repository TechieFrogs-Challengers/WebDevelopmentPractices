<?php

$userid = $_REQUEST['userid'];
$password =$_REQUEST['passid'];
$name =$_REQUEST['username'];
$address =$_REQUEST['address'];
$country =$_REQUEST['country'];
$zipcode =$_REQUEST['zip'];
$email =$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$desc =$_REQUEST['desc'];

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Update Information</title>
    <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="Style.css">
  
    </head>
    <body>
    <div class="form">
    <?php
     
        $conn = mysqli_connect("localhost", "root", "", "regData");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
      
        if(isset($_POST['update']) )
        {
			$userid = $_REQUEST['userid'];
			$password =$_REQUEST['passid'];
			$name =$_REQUEST['username'];
			$address =$_REQUEST['address'];
			$country =$_REQUEST['country'];
			$zipcode =$_REQUEST['zip'];
			$email =$_REQUEST['email'];
			$gender=$_REQUEST['gender'];
			$desc =$_REQUEST['desc'];
			  

			$update="UPDATE data SET 
			password = '".$password."',name = '".$name."', address = '".$address."', country='".$country
			."',zipcode='".$zipcode."',email='".$email."', gender='".$gender."', about='".$desc."' WHERE username='".$userid."'";
			
			if(mysqli_query($conn, $update)){
					echo "<script>alert('Registration Updated successfully')</script>";
					?>
					  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/PHPPrograms/SQL/ViewData.php">
					<?php
				}
			else{
				echo "<font color='red'>Failed to update Reservation Details!!!";
			} 
		
        }
    
        else {
    ?>
    <body onload="document.registration.userid.focus();">
    <h1>Registration Form</h1>

    <form name='registration' onSubmit="return formValidation();" action="" method="POST">
        <ul>
			
            <li><label for="userid">User name:</label></li>
            <li><input type="text" name="userid" size="12" value="<?php echo $userid;?>" /></li>
            <li><label for="passid">Password:</label></li>
            <li><input type="password" name="passid" size="12" value="<?php echo $password;?>"/></li>
            <li><label for="username">Name:</label></li>
            <li><input type="text" name="username" size="50" value="<?php echo $name;?>" /></li>
            <li><label for="address">Address:</label></li>
            <li><input type="text" name="address" size="50" value="<?php echo $address;?>"/></li>
            <li><label for="country">Country:</label></li>
            <li><select name="country">
                    <option selected="" value="Default">(Please select a country)</option>
                    <option value="AF"<?php 
                       if ($country == 'AF') {
                           echo "selected";
                       }
                    ?>>Australia</option>
                    <option value="AL"<?php 
                       if ($country == 'AL') {
                           echo "selected";
                       }
                    ?>>Canada</option>
                    <option value="DZ"<?php 
                       if ($country == 'DZ') {
                           echo "selected";
                       }
                    ?>>India</option>
                    <option value="AS"<?php 
                       if ($country == 'AS') {
                           echo "selected";
                       }
                    ?>>Russia</option>
                    <option value="AD"<?php 
                       if ($country == 'AD') {
                           echo "selected";
                       }
                    ?>>USA</option>
                </select></li>
            <li><label for="zip">ZIP Code:</label></li>
            <li><input type="text" name="zip" maxlength="6" minlength="6" value="<?php echo $zipcode;?>"/></li>
            <li><label for="email">Email:</label></li>
            <li><input type="text" name="email" size="50" value="<?php echo $email;?>" /></li>
            <li><label id="gender">Gender:</label></li>
            <li><input type="radio" name="gender" value="Male"<?php
                     if ($gender == "Male") {
                         echo "checked";
                     }
                    ?> /><span>Male</span></li>
            <li><input type="radio" name="gender" value="Female" <?php
                     if ($gender == "Female") {
                         echo "checked";
                     }
                    ?> /><span>Female</span></li>
            <li><label for="desc">About:</label></li>
            <li><textarea name="desc" id="desc"value="<?php echo $desc;?>"></textarea></li>
            <li><input type="submit" name="update" value="Update " /></li>
        </ul>
    </form>
        <?php } ?>
  <script src = "Validation.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

  
 
 </body>
</html>