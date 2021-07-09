<!DOCTYPE HTML>  
<html>
<head>
<style>
	/* color for error mesages and for spicifing the required fields*/
	.error {color: #FF0000;}
</style>
</head>
<body>  

	<?php
		// define variables and set to empty values
		$nameErr = $emailErr = $genderErr = $websiteErr = "";
		$name = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {//checking the mothod is post or not
		
		  if (empty($_POST["name"])) {//cheking the name is empty or not
		  
			$nameErr = "Name is required";//if empty prints error message
			
		  } else {//if not empty the else block is excuted
		  
			$name = test_input($_POST["name"]);//validarting the given input
			
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				
			  $nameErr = "Only letters and white space allowed";//prints error mesasge if the regularexpression does not satisfy
			}
		  }
		  
		  if (empty($_POST["email"])) {//cheking the email is empty or not
		  
			$emailErr = "Email is required";//if empty prints error message
			
		  } else {//if not empty the else block is excuted
		  
			$email = test_input($_POST["email"]);//validating the given input
			
			// check if e-mail address is well-formed
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//validating the email format 
			
			  $emailErr = "Invalid email format";//if not a email format gives the error message
			}
		  }
			
		  if (empty($_POST["website"])) {//cheking the website is empty or not
		  
			$website = "";
		  } else {//if not empty the else block is excuted
		  
			$website = test_input($_POST["website"]);//validating the given input
			
			// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				
			  $websiteErr = "Invalid URL";//taken input doesnt match the regular expression it print serroe messgae
			}
		  }

		  if (empty($_POST["comment"])) {//cheking the comments is empty or not
			$comment = "";
		  } else {//if not empty the else block is excuted
		  
			$comment = test_input($_POST["comment"]);//validating the given input
		  }

		  if (empty($_POST["gender"])) {//cheking the gender is empty or not
		  
			$genderErr = "Gender is required";//if empty it prints error mesage
			
		  } else {//if not empty the else block is excuted
		  
			$gender = test_input($_POST["gender"]);//validating the given input
		  }
		}

		function test_input($data) {//validateing function for the gven inputes
		  $data = trim($data);//removes the spaces at the ending and starting of the data
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>

	<h2>PHP Form Validation Example</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!-- referhing the page itself-->
		  Name: <input type="text" name="name" value="<?php echo $name;?>">
		  <span class="error">* 
		  <?php echo $nameErr;?></span><!--to print the error message-->
		  <br><br>
		  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
		  <span class="error">* 
		  <?php echo $emailErr;?></span><!--to print the error message-->
		  <br><br>
		  Website: <input type="text" name="website" value="<?php echo $website;?>">
		  <span class="error">
		  <?php echo $websiteErr;?></span><!--to print the error message-->
		  <br><br>
		  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><!--to print the error message-->
		  <br><br>
		  Gender:
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
		  <span class="error">* 
		  <?php echo $genderErr;?></span><!--to print the error message-->
		  <br><br>
		  <input type="submit" name="submit" value="Submit">  
	</form>

	<?php
		//php code to print the values enterd by the user
		echo "<h2>Your Input </h2>";
		echo "Name :: ".$name;
		echo "<br><br>";
		echo "Email :: ".$email;
		echo "<br><br>";
		echo "WebSite ::".$website;
		echo "<br><br>";
		echo "Comments :: ".$comment;
		echo "<br><br>";
		echo "Gender :: ".$gender;
	?>

</body>
</html>
