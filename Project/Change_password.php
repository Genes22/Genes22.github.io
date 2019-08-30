<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
    <div>
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(0,0,0);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>About Us</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>
                    </ul><a href="Welcome_user.php" data-bs-hover-animate="rubberBand" style="color:rgb(255,255,255);font-size:20px;"><strong>Back</strong><span><i class="typcn typcn-arrow-back" style="color:rgb(255,129,129);"></i></span></a></div>
            </div>
        </nav>
        <div>
            <div id="wrapper">
                <div id="sidebar-wrapper" style="background-color:rgba(0,0,0,0.56);height:512px;">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand"> <a href="#" style="color:rgb(255,255,255);"><strong>My Account</strong></a></li>
                        <li> <a href="#" style="color:rgb(255,255,255);">Change Password</a></li>
                    </ul>
                    <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:116px;width:202px;background-color:rgb(255,90,90);margin-right:37px;"><strong>Sign Out</strong></button></form>
                </div>
            </div>
        </div>
    </div>

    <div class="login-dark" style="background-image:url(&quot;assets/img/home.jpg&quot;);height:511px;">
        <form action="includes/Changepassword.inc.php" method="post" style="margin-top:-39px;background-color:rgba(30,40,51,0.67);">
            <h2 style="font-size:19px;margin-top:-22px;margin-bottom:45px;height:22px;">
                <strong>Change Account Password</strong>
            </h2>
            <!--<div class="form-group">
                <input class="form-control" type="password" name="Opassword" placeholder="Old Password" style="background-color:#ffffff;color:rgb(0,0,0);">
            </div>-->
            <div class="form-group">
                <input class="form-control" type="password" name="Npassword" placeholder="New Password" style="background-color:#ffffff;color:rgb(0,0,0);">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="CNpassword" placeholder="Confirm New Password" style="background-color:#ffffff;color:rgb(0,0,0);">
            </div>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET['error'] == "emptyfield") {
                    echo '<p class="text-monospace text-center" style="color:rgb(255,0,0);">
                <strong>Please fill all the inputs</strong>
            </p>';
                }
                else if ($_GET["error"] == "invalidpwd") {
                    echo '<p class="text-monospace text-center" style="color:rgb(255,0,0);">
                <strong>Password must contain numbers and alphabets only</strong>
            </p>';
                }
                else if ($_GET["error"] == "passwordlength") {
                    echo '<p class="text-monospace text-center" style="color:rgb(255,0,0);">
                <strong>Password must have at least 8 characters</strong>
            </p>';
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="text-monospace text-center" style="color:rgb(255,0,0);">
                <strong>Password mismatch!</strong>
            </p>';
                }
                else if ($_GET["error"] == "sqlerror") {
                    echo '<p class="text-monospace text-center" style="color:rgb(255,0,0);">
                <strong>Sorry! System error,try again later..</strong>
            </p>';
                }
            }
            ?>
            
            <div class="form-group">
                <button class="btn btn-primary active btn-block btn-sm" type="submit" name="change-password" data-bs-hover-animate="rubberBand">
                    <strong>Change</strong>
                </button>
            </div>
        </form>
    </div>

    <div class="footer-dark" style="background-color:rgb(0,0,0);">
        <footer>
            <div class="container">
                <div class="row">
                    <!--<div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>-->
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                        <a
                            href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
                    </div>
                </div>
                <p class="copyright">TeflonDon © 2019</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>