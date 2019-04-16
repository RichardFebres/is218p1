<?php
require('backend/config.php');
// Start session
session_start();

$con = getConnection();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"
    <meta lang="en">s
    <title>Protected</title>
</head>
<body>
	<p>
		You are logged in as <?php echo $_SESSION['username']; ?>
        <br><br>

        <!-- Change this to be accessed from the database instead -->
		<?php
        $sql = "SELECT * FROM users WHERE username='". $_SESSION['username'] . "'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "Username: " . $row["username"]."<br>";
                echo "Name:" .$row["fname"] . " ".$row["lname"]."<br>";
                echo "College:" .$row["school"]."<br>";
                echo "Major:" .$row["major"]."<br>";
            }
        } else {
            echo "0 results";
        }
        ?>
	</p>
	<p>
		<a href="logout.php">Logout</a>

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . $row["username"]."<br>";
            echo "Name:" .$row["f"] . " ".$row["lname"]."<br>";
            echo "College:" .$row["college"]."<br>";
            echo "Major:" .$row["major"]."<br>";
        }
    } else {
        echo "0 results";
    }

    ?>
</p>
<p>
    <a href="logout.php">Logout</a>

</p>

</body>
</html>