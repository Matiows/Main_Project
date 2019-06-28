<?php
require 'includes/config.php';
require 'includes/form_handler/register_handler.php';
require 'includes/form_handler/login_handler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project x</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container login ">
    <h1>Welcome</h1>
    <form action="index.php" method="post" class="form-inline ">
        <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
        <div class="form-group">
            <label>Email or Username&nbsp</label>
            <input class="form-control" type="text" name="log_email"
                   value="<?php if(isset($_SESSION['log_email'])) {echo $_SESSION['log_email'];} ?>" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="log_password">
        </div>
        <input type="submit" class="btn btn-default btn-login" name="login_button" value="Log in">
    </form><br>
</div><br>
<div class="clearfix"></div>
<div class="container">
<div class="col-lg-3 col-lg-offset-9 col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7">
<div class="register">
<form action="index.php" method="POST">
        <div class="error-box">
                <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo " <div>*Your first name must be between 2 and 25 characters</div>";
                if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo " <div>*Your last name must be between 2 and 25 characters</div>";
                if(in_array("Email already in use<br>", $error_array)) echo "<div>*Email already in use</div>";
                else if(in_array("Invalid email format<br>", $error_array)) echo "<div>*Invalid email format</div>";
                else if(in_array("Emails don't match<br>", $error_array)) echo "<div>*Emails don't match</div>";
                if(in_array("Your passwords do not match<br>", $error_array)) echo "<div>*Your passwords do not match</div>";
                else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<div>*Your password can only contain english characters or numbers</div>";
                else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<div>*Your password is not strong enough</div>";?>
                <?php if(in_array("You're all set! Goahead and login!<br>", $error_array)) echo "<p>You're all set! Go ahead and login!</p>"; ?></div>
        <div class="form-group ">
            <label>First name </label>
            <input class="form-control" type="text" name="reg_fname"
                   value="<?php if(isset($_SESSION['reg_fname'])) { echo $_SESSION['reg_fname']; }  ?>" required>
        </div>
        <div class="form-group ">
            <label>Last name </label>
            <input class="form-control" type="text" name="reg_lname"
                   value="<?php if(isset($_SESSION['reg_lname'])) { echo $_SESSION['reg_lname']; } ?>" required>
        </div>
        <div class="form-group">
            <label>Email </label>
            <input class="form-control" type="email" name="reg_email"
                   value="<?php if(isset($_SESSION['reg_email'])) { echo $_SESSION['reg_email']; } ?>" required>
        </div>
        <div class="form-group">
            <label> Confirm Email </label>
            <input class="form-control" type="email" name="reg_email2"
                   value="<?php if(isset($_SESSION['reg_email2'])) { echo $_SESSION['reg_email2']; } ?>" required>
        </div>
        <div class="form-group">
            <label>Password </label>
            <input class="form-control" type="password" name="reg_password" required>
        </div>
        <div class="form-group">
            <label>Confirm password  </label>
            <input class="form-control" type="password" name="reg_password2" required>
        </div>
        <input type="submit" class="btn btn-default" name="register_button" value="Register">
        <br>
    </form>
</div>
</div>
</div>
</body>
</html>