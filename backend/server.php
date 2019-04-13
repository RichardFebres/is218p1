<?php

// Methods for handling user input
require_once 'backend/user.php';

// Create user session
session_start();

// Define the database information
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'is218p1');

// Connect to DB
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Create exceptions array to store errors for routes
$exceptions = array('register', 'login');

// Check some input here
if (isset($_POST['username'], $_POST['password'])) {
    // Okay, so user has input some text for both fields
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lets validate their input
    if (valid_credentials($username, $password, $con)) {
        // Credentials validated successfully
        // Log the boi in
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: protected.php');
    } else {
        // User doesnt exist
        echo "user doesnt exist";
        array_push($errors, "Wrong username/password combination");
    }

}


?>