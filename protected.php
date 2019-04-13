<?php include('backend/server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"
    <meta lang="en">
	<title>Protected</title>
</head>
<body>
	<p>
		You are logged in as <?php echo $_SESSION['username']; ?>

        <!-- Change this to be accessed from the database instead -->
		Your name is: <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
		You attend: <?php echo $_SESSION['college']; ?>
		Your chosen major is: <?php echo $_SESSION['major']; ?>
	</p>
	<p>
		<a href="logout.php">Logout</a>

	</p>

</body>
</html>
