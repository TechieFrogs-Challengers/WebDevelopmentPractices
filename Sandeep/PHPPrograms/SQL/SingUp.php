<!DOCTYPE HTML>

<html>

  <head>

    <meta charset="utf-8">

    <title>form</title>

<style type="text/css">

    *{margin:0px;padding:0px;}

    ul{

      width:400px;

      list-style:none;

      margin:50px auto;

    }

    li{

      padding:12px;

      position:relative;

    }

    label{

      width:150px;

      display:inline-block;

      float:left;

      line-height:30px;

    }

    input[type='text'],input[type='password']{

      height:30px;

    }

    img{

      margin-left:10px;

    }

    input[type="submit"]{

      margin-left:80px;

      padding:5px 10px;

    }

  </style>

  </head>

  <body>

<form action="SignUpValidate.php" method="post">

  <ul>

    <li>

      <label>user name:</label>

      <input type="text" name="username" placeholder="Please enter your account number"/>

    </li>

    <li>

      <label>password:</label>

      <input type="password" name="password" placeholder="Please input a password" />

    </li>

    <li>

      <label>Confirm password:</label>

      <input type="password" name="confirm" placeholder="Please enter the password again" />

    </li>

    <li>

      <label>Email:</label>

      <input type="text" name="email" placeholder="Please enter email"/>

    </li>

    <li>

      <input type="submit" value="register" />

    </li>

  </ul>

</form>

</body>

</html>