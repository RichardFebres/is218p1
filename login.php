<?php

// Create user session
session_start();

if (!empty($_POST)) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		//Get user submitted data from db
		$conn = new mysqli('sql1.njit.edu', 'rf57', 'secret', 'rf57');
		$stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
		$stmt->bind_param('s', $_POST['username']);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_object();


		// Verify user and get $_SESSION
		if (password_verify($_POST['password'], $user->password)) {
			$_SESSION['id'] = $user->ID;
		}
	}
}
session_destroy();
?>

<form method="post" action="">
	<input name="username" type="text" placeholder="Please enter your username" required>
	<input name="password" type="text" placeholder="Please enter your password" required>
	<input type="submit" value="Submit">
</form>
