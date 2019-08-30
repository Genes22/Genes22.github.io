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
    <title>Welcome_user</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
    <div>
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(0,0,0);">
            <div class="container-fluid"><a class="navbar-brand" href="./" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>About Us</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-size:17px;color:rgb(140,140,140);font-family:Alike, serif;">
                                <strong>Upload..</strong>
                            </a>
                            <div
                                class="dropdown-menu" role="menu">
                                <a class="dropdown-item text-info" role="presentation" href="uploaddet.php?prop=house" style="font-size:16px;">
                                    <strong>House</strong>
                                </a>
                                <a class="dropdown-item text-info" role="presentation" href="uploaddet.php?prop=land" style="font-size:16px;">
                                    <strong>Land</strong>
                                </a>
                                <a
                                    class="dropdown-item text-info" role="presentation" href="uploaddet.php?prop=godown" style="font-size:16px;">
                                    <strong>Godown</strong>
                                </a>
                                <a class="dropdown-item text-info" role="presentation" href="uploaddet.php?prop=hostel" style="font-size:16px;">
                                    <strong>Hostel</strong>
                                </a>
                            </div>
                </li>

                <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;">
                    <strong>Search..</strong>
                </a>
                    <div class="dropdown-menu"
                        role="menu">
                        <a class="dropdown-item text-info" role="presentation" href="Searchhouse.php" style="font-size:16px;">
                            <strong>House</strong>
                        </a>
                        <a class="dropdown-item text-info" role="presentation" href="Searchland.php" style="font-size:16px;">
                            <strong>Land</strong>
                        </a>
                        <a
                            class="dropdown-item text-info" role="presentation" href="Searchgodown.php" style="font-size:16px;">
                            <strong>Godown</strong>
                        </a>
                        <a class="dropdown-item text-info" role="presentation" href="Searchhostel.php" style="font-size:16px;">
                            <strong>Hostel</strong>
                        </a>
                    </div>
                </li>
                </ul>
                <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post">
                    <button class="btn btn-primary active btn-sm float-right visible" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(254,86,86);margin-right:22px;"><strong>Sign Out</strong></button></form>
            </div>
    </div>
    </nav>
    </div>
    <div class="projects-horizontal">
        <div class="container" style="background-color:#ffffff;">
            <div class="intro">
                <h2 class="text-center">Most visited properties</h2>
                <p class="text-center">List of all most visited properties will be shown below here</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/28690-resampled.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">House for sell at Bunju 'A'</h3>
                            <p class="description">Bedrooms:3, Attached garage, Water and electricity service availble, Surrounded with block fence, All legal paper work available Price:Tsh 75000000</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/28658.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">House for rent at Ununio</h3>
                            <p class="description">All legal paper work available, 500m from Bahari Beach main road, Price:Tsh 70000000</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/imagesz.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Warehouse for rent at Tegeta</h3>
                            <p class="description">Easy access to main Bagamoyo road, electricity and water available, Price:Tsh 695000 Per Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/4865.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Plot for sell at Mbezi juu</h3>
                            <p class="description">Area =14520 square meters, All paper work available at local govnment of mbez juu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-whatsapp-outline">
                            
                        </i>
                    </a>
                    <a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-facebook">
                            
                        </i>
                    </a>
                    <a href="#" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-instagram">
                            
                        </i>
                    </a>
                        <a
                            href="#" data-bs-hover-animate="rubberBand">
                            <i class="icon ion-social-twitter">
                                
                            </i>
                        </a>
                    </div>
                </div>
                <p class="copyright">TeflonDon © 2019</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>