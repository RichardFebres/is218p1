<?php

if (!empty($_POST)) {

    // Connect to MySQL
    $mysqli = new mysqli('sql1.njit.edu', 'rf57', 'secret', 'rf57');

    // Check if connection failed
    if ($mysqli->connect_error) {
        die("Connect error: ". $mysqli->connect_errno. ': ' .$mysqli->connect_error);
    }

    // Insert data to user table
    $sql = "INSERT INTO user (username, fname, lname, college, major)
            VALUES (
            '{$mysqli->real_escape_string($_POST['username'])}', 
            '{$mysqli->real_escape_string($_POST['password'])}',
            '{$mysqli->real_escape_string($_POST['fname'])}', 
            '{$mysqli->real_escape_string($_POST['lname'])}',
            '{$mysqli->real_escape_string($_POST['college'])}',
            '{$mysqli->real_escape_string($_POST['major'])}'
            )";

     $insert = $mysqli->query($sql);

     // Print response

     if ($insert) {
         echo "Succesful Row ID: {$mysqli->insert_id}";
     } else {
         die("Error: {$mysqli->connect_errno} : {$mysqli->connect_error}");
     }

     // Close the connection
    $mysqli->close();
}
?>

<form method="post" action="">
    <input name="username" type="text" placeholder="Please enter a user name"required>
    <input name="password" type ="password" placeholder=" Please enter a password" minlength="8" required>
    <input name="fname" type ="text" placeholder="Please enter your first name"required>
    <input name="lname" type="text" placeholder="Please enter your last name"required>
    <input name="college" type="text" placeholder="Please enter your college" required>
    <input name="major" type="text" placeholder="PLease enter your major"required>
    <input value="Submit" type="submit">
</form>



