<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if no then redirect him to signin page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: Signin.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.48);"><strong>Home</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="About.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.48);"><strong>About Us</strong></a></li>
                      <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="Contact.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>-->
                    </ul><a href="#" data-bs-hover-animate="pulse" style="font-size:20px;color:rgb(255,255,255);"><strong>Back</strong></a><span class="navbar-text"><i class="typcn typcn-arrow-back" data-bs-hover-animate="pulse" style="color:#ff6565;font-size:26px;"></i></span></div>
            </div>
        </nav>
    </div>
    <div class="team-grid" style="background-image:url(&quot;assets/img/home.jpg&quot;);">
        <div class="container" style="background-color:rgba(1,1,1,0.38);">
            <div class="intro">
                <h2 class="text-center" style="color:rgb(255,255,255);">Our Team </h2>
                <p class="text-center" style="color:rgb(255,255,255);">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet.&nbsp; </p>
            </div>
            <div class="row justify-content-center people" style="height:292px;">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/1.jpg)">
                        <div class="cover">
                            <h3 class="name">Kibalangulu</h3>
                            <p class="title">Musician</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-whatsapp"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/2.jpg)">
                        <div class="cover">
                            <h3 class="name">Elnes</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-whatsapp"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/3.jpg)">
                        <div class="cover">
                            <h3 class="name">Linda</h3>
                            <p class="title">Stylist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-whatsapp"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center people" style="height:345px;">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/1.jpg)">
                        <div class="cover">
                            <h3 class="name">Sajda</h3>
                            <p class="title">Musician</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-whatsapp"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/2.jpg)">
                        <div class="cover">
                            <h3 class="name">Lulu</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-whatsapp"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/3.jpg)">
                        <div class="cover">
                            <h3 class="name">James</h3>
                            <p class="title">Stylist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-whatsapp"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-grid" style="background-color:#ffffff;"></div>
    <div style="background-color:rgba(9,9,9,0.44);color:rgb(255,255,255);">
        <div>
            <h1 class="text-center" style="margin-bottom:16px;">Contact Infomation</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><i class="fa fa-envelope"></i>
                    <h1 style="font-size:22px;width:145px;margin-top:-25px;margin-left:20px;">Our E-mail</h1>
                    <div></div><span><strong>Homesite &amp; Estate Agent</strong></span>
                    <div></div><span>raymossmsese@gmail.com<br></span></div>
                <div class="col-md-4"><i class="fa fa-location-arrow" style="font-size:18px;"></i>
                    <div></div>
                    <h1 style="font-size:22px;width:145px;margin-top:-25px;margin-left:20px;">Our Address</h1><span><strong>Homesite &amp; Estate Agent</strong></span>
                    <div></div><span>Dar-es-salaam</span>
                    <div><span>Mbezi Beach</span></div>
                    <div><span>Heroes Street</span></div>
                </div>
                <div class="col"><i class="icon ion-android-call" style="font-size:21px;"></i>
                    <div></div>
                    <h1 style="font-size:22px;width:145px;margin-top:-34px;margin-left:20px;">Our Contact</h1><span><strong>Homesite &amp; Estate Agent</strong></span>
                    <div></div><span>+225 743 233 684</span>
                    <div></div><span>+255 738 586 943</span></div>
            </div>
        </div>
    </div>
    <div></div>
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