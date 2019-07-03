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
        <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "<div class='error-login' >Incorrect email or password</div>"; ?>
        <div class="form-group">
            Email or Username&nbsp
            <input class="form-control" type="text" name="log_email"
                   value="<?php if(isset($_SESSION['log_email'])) {echo $_SESSION['log_email'];} ?>" required>

            Password
            <input class="form-control" type="password" name="log_password">
        </div>
        <input type="submit" class="btn btn-primary btn-login" name="login_button" value="Log in">
    </form><br>
</div><br>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7">
            <div class="register col-lg-10">
                <div class="panel panel-info">
                    <div class="panel-heading btn-group btn-block">
                        <button id="btn-usr" class="btn btn-default col-xs-4"> User</button>
                        <button id="btn-doc" class="btn btn-default col-xs-8">Health Professional</button>
                    </div>
                    <div class="panel-body collapse in" id="register-usr">
                        <form action="index.php" method="POST">
                            User's Registration <hr>
                            <div class="error-box">
                                    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo " <div>*Your first name must be between 2 and 25 characters</div>";
                                    if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo " <div>*Your last name must be between 2 and 25 characters</div>";
                                    if(in_array("Email already in use<br>", $error_array)) echo "<div>*Email already in use</div>";
                                    else if(in_array("Invalid email format<br>", $error_array)) echo "<div>*Invalid email format</div>";
                                    else if(in_array("Emails don't match<br>", $error_array)) echo "<div>*Emails don't match</div>";
                                    if(in_array("Your passwords do not match<br>", $error_array)) echo "<div>*Your passwords do not match</div>";
                                    else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<div>*Your password can only contain english characters or numbers</div>";
                                    else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<div>*Your password is not strong enough</div>";?>
                                    <?php if(in_array("You're all set! Goahead and login!<br>", $error_array)) echo "<p>You're all set! Go ahead and login!</p>"; ?> </div>
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
                                <label> Password </label>
                                <input class="form-control" type="password" name="reg_password" required>
                            </div>
                            <div class="form-group">
                                <label> Confirm Password </label>
                                <input class="form-control" type="password" name="reg_password2" required>
                            </div>
                            <input type="submit" class="btn btn-primary btn-block" name="register_button_usr" value="Register">
                        </form>
                    </div>
                    <div class="panel-body collapse " id="register-doc">
                        <form action="index.php" method="POST">
                            Health professional's registration<hr>
                            <div class="error-box">
                                    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo " <div>*Your first name must be between 2 and 25 characters</div>";
                                    if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo " <div>*Your last name must be between 2 and 25 characters</div>";
                                    if(in_array("Email already in use<br>", $error_array)) echo "<div>*Email already in use</div>";
                                    else if(in_array("Invalid email format<br>", $error_array)) echo "<div>*Invalid email format</div>";
                                    else if(in_array("Emails don't match<br>", $error_array)) echo "<div>*Emails don't match</div>";
                                    if(in_array("Your passwords do not match<br>", $error_array)) echo "<div>*Your passwords do not match</div>";
                                    else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<div>*Your password can only contain english characters or numbers</div>";
                                    else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<div>*Your password is not strong enough</div>";?>
                                    <?php if(in_array("You're all set! Goahead and login!<br>", $error_array)) echo "<p>You're all set! Go ahead and login!</p>"; ?> </div>
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
                                <label> Password </label>
                                <input class="form-control" type="password" name="reg_password" required>
                            </div>
                            <div class="form-group">
                                <label> Confirm Password </label>
                                <input class="form-control" type="password" name="reg_password2" required>
                            </div>
                            <input type="submit" class="btn btn-primary btn-block" name="register_button_doc" value="Register">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready (function () {
       $('#btn-usr').click(function () {
            $('#register-doc').collapse('hide');
            $('#register-doc').on('hidden.bs.collapse', function () {
                $('#register-usr').collapse('show');
            });
        });
        $('#btn-doc').click(function () {
            $('#register-usr').collapse('hide');
            $('#register-usr').on('hidden.bs.collapse', function () {
                $('#register-doc').collapse('show');
            });
        });
    });
</script>
</body>
</html>