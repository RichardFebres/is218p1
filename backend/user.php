<?php

// Checks if the given user exists in table
function user_exists($username) {
	$username = mysqli_real_escape_string($username);

	// Insert mysqli query here and test number of rows

	// return (mysqli_result($total, 0) == '1') ? true : false;
}
// Checks if the user credentials are valid
function valid_credentials($username, $password ) {
	$username = mysqli_real_escape_string($username);
	$password = sha1($password);


	// return (mysqli_result($total, 0) == '1') ? true : false;
}
// Adds a user to the database
function add_user($username, $password) {
    $username = mysqli_real_escape_string($username);
    $password = sha1($password);

    // Insert mysql query here and test number of rows

}
?>
