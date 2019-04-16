<?php

// Methods for handling user input
require_once 'backend/user.php';

// Create user session
session_start();

// Create exceptions array to store errors for routes
$exceptions = array('register', 'login');


?>