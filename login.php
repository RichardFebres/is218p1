<?php


//include('backend/init.php');

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
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="background"></div>

    <section id="content">
        <div id="card-wrapper">
            <section id="card-left">
                <div id="logo"></div>
                <h3 id="login-header">Sign in to Stormify</h3>

	            <form method="post" action="" id="login-form">
                    <div class="inputItem-wrapper">
                        <div class="input-textField-image" id="email"></div>
		                <input class="input-textField" name="username" type="email" placeholder="Email" required>
                    </div>

                    <div class="inputItem-wrapper">
                        <div class="input-textField-image" id="password"></div>
                        <input class="input-textField" name="password" type="password" placeholder="Password" required>
                    </div>

		            <input type="submit" value="SIGN IN" id="input-submit">

                    <span id="forgotPassword">Forgot your password?</span>
	            </form>

                <section id="social">
                    <img src="images/logo-facebook.png" class="social-icon" />
                    <img src="images/logo-google.png" class="social-icon" />
                    <img src="images/logo-linkedin.png" class="social-icon" />
                </section>

            </section><!-- end card-left -->

            <section id="card-right">
                <h3 id="right-header">Hello, Neighbor!</h3>
                <h5 id="right-subText">Never been here before? Tell us a bit about yourself and you can begin.</h5>
                <button id="button-signup">SIGN UP</button>
            </section>

        </div><!-- end card-wrapper -->

    </section><!-- end content-->
</body>
</html>
