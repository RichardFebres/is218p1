<?php

//Create user session
session_start();

//Set session cookie to null 
$_SESSION = array();

//Close session
session_destroy();

echo "You have successfully signed out.";
echo "<br>";
echo "<br>";

?>

<html>
    <body>
        <a href="login.php">Go back to login page</a>
    </body>

</html>
