<?php

#include('backend/init.php');

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

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="background"></div>

<section id="content">
    <div class="card-wrapper" id="register">
        <section id="register-card-left">
            <h3 id="right-header">Hello, Neighbor!</h3>
            <h5 id="right-subText">Already have an account? Head over to the sign in page.</h5>
            <a id="button-signup" href="login.php">SIGN IN</a>
        </section>

        <section id="register-card-right">
            <div id="logo"></div>
            <h3 id="card-header">Sign Up For An Account</h3>
            <h5 id="card-subHeader">It's free!</h5>

            <form method="post" action="" id="login-form">
                <div class="inputItem-wrapper">
                    <div class="input-textField-image" id="email"></div>
                    <input class="input-textField" name="username" type="email" placeholder="Email" required>
                </div>

                <div class="inputItem-wrapper">
                    <div class="input-textField-image" id="password"></div>
                    <input class="input-textField" name="password" type="password" placeholder="Password" required>
                </div>

                <div class="inputItem-wrapper">
                    <div class="input-textField-image" id="name-first"></div>
                    <input class="input-textField" name="password" type="text" placeholder="First Name" required>
                </div>

                <div class="inputItem-wrapper">
                    <div class="input-textField-image" id="name-last"></div>
                    <input class="input-textField" name="password" type="text" placeholder="Last Name" required>
                </div>

                <div class="inputItem-wrapper">
                    <div class="input-textField-image" id="school"></div>
                    <input class="input-textField" name="password" type="text" placeholder="School" required>
                </div>

                <div class="inputItem-wrapper">
                    <div class="input-textField-image" id="major"></div>
                    <input class="input-textField" name="password" type="text" placeholder="Major" required>
                </div>

                <input type="submit" value="SIGN UP" id="input-submit">

            </form>

        </section><!-- end card-left -->

    </div><!-- end card-wrapper -->

</section><!-- end content-->
</body>
</html>

