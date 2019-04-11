<?php

// Create user session
session_start();

// Create exceptions array to store errors for routes
$exceptions = array('register', 'login');

// Get the current script as a string
$page = substr(end(explode('/', $_SERVER['SCRIPT_NAME']), 0, -4));

// If errors exist redirect to login page to create user session
if (in_array($page, $exceptions) === false) {
	if (isset($_SESSION['username']) === false) {
		header('location: login.php');
		die();
	}
}

// Connect to DB
mysqli_connect('127.0.0.1', 'user', 'passwd');
mysqli_select_db('user_db');

 /* Check if connection failed
    if ($mysqli->connect_error) {
        die("Connect error: ". $mysqli->connect_errno. ': ' .$mysqli->connect_error);
    }
 */

// Define path for the file being loaded which is this.
$path = dirname(__FILE__);

include("{$path}/backend/init.php");
