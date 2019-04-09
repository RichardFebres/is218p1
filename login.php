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
         die("Error: " {$mysqli->connect_errno} : {$mysqli->connect_error}");
     }  

     // Close the connection
    $mysqli->close();
}
?>
<form method="post" action="">
    <input name="username" type="text">
    <input name="fname" type ="text">
    <input name="lname" type="text">
    <input name="college" type="text">
    <input name="major" type="text">
</form>


             
