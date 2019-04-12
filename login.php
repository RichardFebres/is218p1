<?php

include('backend/init.php');

// Define errors array for logging
$errors = array();

// Check conditions for valid auth and create entry in errors if conditions not met
if (isset($_POST['username'], $_POST['password'])) {
    if (empty($_POST['username'])) {
        $errors[] = 'The username must not be empty';
    }

    if (empty($_POST['password'])) {
        $errors[] = 'The password must not be empty.';
    }


    if (valid_credentials($_POST['username'], $_POST['password'] === false)) {
    	$error[] = "Username / Password incorrect.";
    }

    // If no errors persist then redirect to protected
    if(empty($errors)) {
    	$_SESSION['username'] = htmlentities($_POST['username']);

    	header('Location: protected.php');
    	die();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<p>
		You can register for an account
		if you do not already have one here
		<a href="register.php">Register Here</a>
	</p>
	<form method="post" action="">
		<input name="username" type="email" placeholder="Please enter your username" required>
		<input name="password" type="text" placeholder="Please enter your password" required>
		<input type="submit" value="Submit">
	</form>


</body>
</html>
