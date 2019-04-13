<?php






/*
// Get the current script as a string
$page = substr(end(explode('/', $_SERVER['SCRIPT_NAME']), 0, -4));


// If errors exist redirect to login page to create user session
if (in_array($page, $exceptions) === false) {
	if (isset($_SESSION['username']) === false) {
		header('location: login.php');
		die();
	}
}
*/


// Check if connection failed
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

// Define path for the file being loaded which is this.
$path = dirname(__FILE__);

#include("backend/init.php");

?>
