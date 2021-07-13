<?php
// Start the session
session_start();
?>
<?php

echo "<h2>Your Input:</h2>";
echo $_SESSION["name1"];
echo "<br>";
echo $_SESSION["email1"];
echo "<br>";
echo $_SESSION["website1"];
echo "<br>";
echo $_SESSION["comment1"];
echo "<br>";
echo $_SESSION["gender1"];
echo "<h2>Your Input:</h2>";
?>