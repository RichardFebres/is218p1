<?php

include('backend/init.php');

$errors = array();

if (isset($_POST['username'], $_POST['password'])) {
    if (empty($_POST['username'])) {
        $errors[] = 'The username must not be empty';
    }

    if (empty($_POST['password'])) {
        $errors[] = 'The password must not be empty.';
    }

    if(empty($errors)) {
        add_users($_POST['username'], $_POST['password']);

        $_SESSION['username'] = htmlentities($_POST['username']);

        header("Location: protected.php");
        die();
    }
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



