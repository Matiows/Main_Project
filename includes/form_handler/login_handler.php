<?php  

if(isset($_POST['login_button'])) {

	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //sanitize email

	$_SESSION['log_email'] = $email; //Store email into session variable 
	$password = $_POST['log_password']; //Get password

	$check_database_query_usr = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	$check_database_query_doc = mysqli_query($con, "SELECT * FROM doctors WHERE email='$email' AND password='$password'");
	$check_login_query_usr = mysqli_num_rows($check_database_query_usr);
	$check_login_query_doc = mysqli_num_rows($check_database_query_doc);

	if($check_login_query_usr == 1) {
		$row = mysqli_fetch_array($check_database_query_usr);
		$username = $row['username'];

		$user_closed_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query) == 1) {
			$reopen_account = mysqli_query($con, "UPDATE users SET user_closed='no' WHERE email='$email'");
		}

		$_SESSION['username'] = $username;
		$_SESSION['who_logged'] = "usr";
		header("Location: usr_home.php");
		exit();
	}
    else if($check_login_query_doc == 1) {
        $row = mysqli_fetch_array($check_database_query_doc);
        $username = $row['username'];

        $user_closed_query = mysqli_query($con, "SELECT * FROM doctors WHERE email='$email' AND user_closed='yes'");
        if(mysqli_num_rows($user_closed_query) == 1) {
            $reopen_account = mysqli_query($con, "UPDATE doctors SET user_closed='no' WHERE email='$email'");
        }

        $_SESSION['username'] = $username;
        $_SESSION['who_logged'] = "doc";
        header("Location: doc_home.php");
        exit();
    }
	else {
		array_push($error_array, "Email or password was incorrect<br>");
	}
}

?>