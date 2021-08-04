<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
  

</head>
<body onload="document.registration.userid.focus();">
    <h1>Registration Form</h1>

    <form name='registration' onSubmit="return formValidation();" action="InsertData.php">
        <ul>
            <li><label for="userid">User name:</label></li>
            <li><input type="text" name="userid" size="12" /></li>
            <li><label for="passid">Password:</label></li>
            <li><input type="password" name="passid" size="12" /></li>
            <li><label for="username">Name:</label></li>
            <li><input type="text" name="username" size="50" /></li>
            <li><label for="address">Address:</label></li>
            <li><input type="text" name="address" size="50" /></li>
            <li><label for="country">Country:</label></li>
            <li><select name="country">
                    <option selected="" value="Default">(Please select a country)</option>
                    <option value="AF">Australia</option>
                    <option value="AL">Canada</option>
                    <option value="DZ">India</option>
                    <option value="AS">Russia</option>
                    <option value="AD">USA</option>
                </select></li>
            <li><label for="zip">ZIP Code:</label></li>
            <li><input type="text" name="zip" maxlength="6" minlength="6"/></li>
            <li><label for="email">Email:</label></li>
            <li><input type="text" name="email" size="50" /></li>
            <li><label id="gender">Gender:</label></li>
            <li><input type="radio" name="gender" value="Male" /><span>Male</span></li>
            <li><input type="radio" name="gender" value="Female" /><span>Female</span></li>
            <li><label for="desc">About:</label></li>
            <li><textarea name="desc" id="desc"></textarea></li>
            <li><input type="submit" name="submit" value="Submit" /></li>
        </ul>
    </form>
    <script src="Validation.js"></script>
</body>
</html>