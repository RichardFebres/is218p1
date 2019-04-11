<?php

//Create user session
session_start();

//Set session cookie to null 
$_SESSION = array();

//Close session
session_destroy();

// Redirect to protected
header('Location: protected.php');

?>