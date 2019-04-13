<?php

#include("backend/init.php");

// Checks if the given user exists in table
function user_exists($username) {
	$username = mysqli_real_escape_string($username);

	// Insert mysqli query here and test number of rows
	$total = mysqli_query($con, "SELECT COUNT {'id'} FROM 'user' WHERE 'username' == '{$username}'");

	return (mysqli_result($total, 0) == '1') ? true : false;
}

// Checks if the user credentials are valid
function valid_credentials($username, $password, $con) {
	$username = mysqli_real_escape_string($con, $username);
	$password = sha1($password);

	// FInd this username / password combination
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$results = mysqli_query($con, $query);

	// Returns TRUE if username/password are valid, FALSE otherwise
	return (mysqli_num_rows($results) == 1);

}

// Adds a user to the database
function add_user($username, $password, $fname, $lname, $college, $major) {
    $username = mysqli_real_escape_string($con, $username);
    $password = sha1($password);

    mysqli_query($con, "INSERT INTO 'user' ('username', 'password', 'fname', 'lname','college', 'major') VALUES('{$username}', '{$password}', '{$fname}', 
    	'{$lname}', '{$college}', '{$major}')");
}

#include("backend/user.php");
?>
