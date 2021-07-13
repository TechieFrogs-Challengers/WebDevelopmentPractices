<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
//echo "<h2>Your Input:</h2>";
//echo $_COOKIE[$cookie_name];
//echo "<br>";
//echo $_COOKIE[$cookie_email];
//echo "<br>";
//echo $_COOKIE[$cookie_website];
//echo "<br>";
//echo $_COOKIE[$cookie_comment];
//echo "<br>";
//echo $_COOKIE[$cookie_gender];
?>