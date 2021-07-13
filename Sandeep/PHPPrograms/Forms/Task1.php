<!DOCTYPE html>  
<html>  
<head>  
<style>  
	.error {color: #FF0001;}  
</style>  
</head>  
<body>    
	  
	<?php  
		// define variables to empty values  
		$nameerror = $emaierror = $mobilenumbererror = $gendererror = $websiteerror = $agreeerror = "";  
		$name = $email = $mobileno = $gender = $website = $agree = "";  
		  
		//Input fields validation  
		if ($_SERVER["REQUEST_METHOD"] == "POST") {  
			  
		//String Validation  
			if (empty($_POST["name"])) {  
				 $nameerror = "Name is required";  
			} else {  
				$name = input_data($_POST["name"]);  
					// check if name only contains letters and whitespace  
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
						$nameerror = "Only alphabets and white space are allowed";  
					}  
			}  
			  
			//Email Validation   
			if (empty($_POST["email"])) {  
					$emaierror = "Email is required";  
			} else {  
					$email = input_data($_POST["email"]);  
					// check that the e-mail address is well-formed  
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
						$emaierror = "Invalid email format";  
					}  
			 }  
			
			//Number Validation  
			if (empty($_POST["mobileno"])) {  
					$mobilenumbererror = "Mobile no is required";  
			} else {  
					$mobileno = input_data($_POST["mobileno"]);  
					// check if mobile no is well-formed  
					if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
					$mobilenumbererror = "Only numeric value is allowed.";  
					}  
				//check mobile no length should not be less and greator than 10  
				if (strlen ($mobileno) != 10) {  
					$mobilenumbererror = "Mobile no must contain 10 digits.";  
					}  
			}  
			  
			//URL Validation      
			if (empty($_POST["website"])) {  
				$website = "";  
			} else {  
					$website = input_data($_POST["website"]);  
					// check if URL address syntax is valid  
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {  
						$websiteerror = "Invalid URL";  
					}      
			}  
			  
			//Empty Field Validation  
			if (empty ($_POST["gender"])) {  
					$gendererror = "Gender is required";  
			} else {  
					$gender = input_data($_POST["gender"]);  
			}  
		  
			//Checkbox Validation  
			if (!isset($_POST['agree'])){  
					$agreeerror = "Accept terms of services before submit.";  
			} else {  
					$agree = input_data($_POST["agree"]);  
			}  
		}  
		function input_data($data) {  
		  $data = trim($data);  
		  $data = stripslashes($data);  
		  $data = htmlspecialchars($data);  
		  return $data;  
		}  
	?>  
	  
	<h2>Registration Form</h2>  
	<span class = "error">* required field </span>  
	<br><br>  
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
		Name:   
		<input type="text" name="name">  
		<span class="error">* 
		<?php echo $nameerror; ?> </span>  
		<br><br>  
		E-mail:   
		<input type="text" name="email">  
		<span class="error">* 
		<?php echo $emaierror; ?> </span>  
		<br><br>  
		Mobile No:   
		<input type="text" name="mobileno">  
		<span class="error">* 
		<?php echo $mobilenumbererror; ?> </span>  
		<br><br>  
		Website:   
		<input type="text" name="website">  
		<span class="error">
		<?php echo $websiteerror; ?> </span>  
		<br><br>  
		Gender:  
		<input type="radio" name="gender" value="male"> Male  
		<input type="radio" name="gender" value="female"> Female  
		<input type="radio" name="gender" value="other"> Other  
		<span class="error">* <?php echo $gendererror; ?> </span>  
		<br><br>  
		Agree to Terms of Service:  
		<input type="checkbox" name="agree">  
		<span class="error">* 
		<?php echo $agreeerror; ?> </span>  
		<br><br>                            
		<input type="submit" name="submit" value="Submit">   
		<br><br>                             
	</form>  
	  
	<?php  
			if(isset($_POST['submit'])) {  
				if($nameerror == "" && $emaierror == "" && $mobilenumbererror == "" && $gendererror == "" && $websiteerror == "" && $agreeerror == "") {  
					echo "<h2 color = #FF0001> <b>You have sucessfully registered.</b> </h2>";  
					echo "<h2>Your Input:</h2>";  
					echo "Name: " .$name;  
					echo "<br>";  
					echo "Email: " .$email;  
					echo "<br>";  
					echo "Mobile No: " .$mobileno;  
					echo "<br>";  
					echo "Website: " .$website;  
					echo "<br>";  
					echo "Gender: " .$gender;  
				} else {  
					echo "<h2> <b>You didn't filled up the form correctly please refill the Form.</b> </h2>";  
				}  
			}  
	?>  
  
</body>  
</html>  