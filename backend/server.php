<?php

// Methods for handling user input
require_once 'backend/user.php';

// Create user session
session_start();

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

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
