<?php
require  'includes/config.php';
if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM doctors WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
}
else {
    header("Location: index.php");
}
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
<div class="container">
    <nav class="navbar navbar-fixed-top navbar-default nav-head hidden-xs">
        <div class="col-lg-1 visible-lg"></div>
        <ul class="nav navbar-nav navbar-left">
            <li> <a href="#" ><span class="h4">Logo </span></a></li>
        </ul>
        <div class="col-md-1 hidden-sm "></div>
        <ul class="nav navbar-nav ">
            <li> <a href="<?php echo $userLoggedIn;?>"><img class="img-circle nav-profile" src="<?php echo $user['profile_pic'];?>"><?php echo $user['first_name'] ?></a></li>
            <li> <a href="#" ><span class="glyphicon glyphicon-home"></span> Home </a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Make an appointment</a> </li>
                    <li><a href="#">Get a doctor online</a> </li>
                    <li><a href="#">Give donation</a> </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" > <span class="glyphicon glyphicon-envelope"></span> </a> </li>
            <li><a href="#" > <span class="glyphicon glyphicon-globe"></span> </a> </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                    <span class="glyphicon glyphicon-cog"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Report a bug</a> </li>
                    <li><a href="#">Settings</a> </li>
                    <li><a href="#">Contact us</a> </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="includes/handlers/logout.php">Log out</a> </li>
                </ul>
            </li>
        </ul>
        <div class="col-sm-4 col-md-pull-1 navbar-right">
            <form class=" form-inline " role="search">
                <div class="input-group navbar-form ">
                    <input type="text" class="form-control  " placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
        </div>
    </nav>
    <nav class="row navbar navbar-fixed-top navbar-default nav-head visible-xs">
        <div class="col-xs-1">
            <a class=" xs-link" href="<?php echo $userLoggedIn;?>"><img class="img-circle nav-profile" src="<?php echo $user['profile_pic'];?>"></a>
        </div>
        <div class="col-xs-2">
            <a class="btn xs-link" href="#" ><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div class="col-xs-2">
            <ul class="nav">
                <li class="dropdown">
                    <a href="#" class=" btn xs-link dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-tasks"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Make an appointment</a> </li>
                        <li><a href="#">Get a doctor online</a> </li>
                        <li><a href="#">Give donation</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-xs-2">
            <a class="btn xs-link" href="#" > <span class="glyphicon glyphicon-envelope"></span> </a>
        </div>
        <div class="col-xs-2">
            <a class="btn xs-link" href="#" > <span class="glyphicon glyphicon-globe"></span> </a>
        </div>
        <div class="col-xs-2">
            <ul class="nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle btn xs-link" data-toggle="dropdown"> <span class="glyphicon glyphicon-search"></span></a>
                    <div class="dropdown-menu head-search">
                        <form class="form-inline " role="search">
                            <div class="input-group ">
                                <input type="text" class="form-control " placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="clearfix"></div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
