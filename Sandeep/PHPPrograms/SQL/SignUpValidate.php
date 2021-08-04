<?php

session_start();
header('Content-Type:text/html;charset=utf-8');
$link = mysqli_connect('localhost','root','','mydb');
if(!$link){
    die('connection failed'.mysqli_connect_error());
}

//receive data 
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$email = $_POST['email'];

//Inspection data
if($username == '' || $password == '' || $confirm == '' || $email == ''){
    echo "<script>
			alert('Information cannot be empty');
			window.location.href='SignUpValidate.php'
		</script>";
}elseif((strlen($username) < 3) || (!preg_match('/^\w+$/',$username))){//user name
    echo "<script>
			alert('The user name is not less than 3 digits and does not contain illegal characters. Please fill in again');
			window.location.href='test.php'
		</script>";
}elseif(strlen($password) < 5){//password
    echo "<script>
			alert('Password no less than 5 digits, please fill in again');
			window.location.href='SignUpValidate.php'
		</script>";
}elseif($password != $confirm){//Repeat password
    echo "<script>
			alert('The two passwords are inconsistent, please fill in again');
			window.location.href='SignUpValidate.php'
		</script>";
}elseif(!preg_match('/^[\w\.]+@\w+\.\w+$/i',$email)){//mailbox
    echo "<script>
			alert('Email is illegal, please fill in again');
			window.location.href='SignUpValidate.php'
		</script>";
}elseif(mysqli_fetch_array(mysqli_query($link,"select * from login where username = '$username'"))){//repeat of user name
    echo "<script>
		alert('User name already exists');
		window.location.href='SignUpValidate.php'
	</script>";
}else{

    //insert database
    $sql = "insert into login(username,password,confirm,email) values('$username','$password','$confirm','$email')";
    if(mysqli_query($link,$sql)){
        echo 'login was successful';
    }else{
        echo "<script>alert('login has failed');window.location.href='test.php'</script>";
    }
}