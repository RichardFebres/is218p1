<?php include('backend/init.php'); ?>

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
	</p>
	<p>
		<a href="logout.php">Logout</a>
	</p>

</body>
</html>
