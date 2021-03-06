<?php
session_start();
require 'includes/main.php';
//check if the use  is logged in to access the cart items
if (isset($_SESSION['loginEmail'])) {
    $email = $_SESSION['loginEmail'];
    $user = $db->prepare("SELECT * FROM `users` WHERE `Email`=:email");
    $user->execute(array(":email" => $email));
    $usrow = $user->fetch(PDO::FETCH_ASSOC); 
    $count = $user->rowCount();
    if($count == 0){
      header('location: login.php');
      unset($_SESSION['loginEmail']);
      $_SESSION['loginNotice'] = "Please login first to use Onoa shop";
    }
}else{
  header('location: login.php');
  $_SESSION['loginNotice'] = "Please login first to use Onoa shop";
}
/*End session checking*/

//assign the session mail to use to query the database
$mail = $_SESSION['loginEmail'];
$username = $usrow['Username'];
$day = date('Y-m-d');
//fetching the cart items 
$cartitems = $db->prepare("SELECT * FROM `cartitems` WHERE `userSec`=?");
$cartitems->execute(array($mail));
while ($ord = $cartitems->fetch(PDO::FETCH_ASSOC)) {
  $item = $ord['itemName'];
  $ord = $db->prepare("INSERT INTO `orders` (`order_date`, `order_name`, `order_email`,`itemName`) VALUES (?, ?, ?, ?)");
  if($ord->execute(array($day,$username, $mail,$item))){
    $del = $db->prepare("DELETE FROM `cartitems` WHERE `itemName` = ? AND `userSec` = ?");
    $del->execute(array($item, $mail));
  }else{
    echo "failed to add";
  }

}

?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>OnoA Shop | Prdoucts Page</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <header id="aa-header">
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="./">
                  <span class="fa fa-shopping-cart"></span>
                  <p>OnoA<strong>Shop</strong> <span>Your Online Ordering Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <div style="float: right;" title="View cart items">
                <a href="cartitems.php"><i class="fa fa-shopping-cart fa-3x"></i></a>
              </div>
              <!-- / logo  -->
                        
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              
              <li><a href="./"><i class="fa fa-home fa-2x">Home</i></a></li>
              <li style="float: right;"><a href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
    </div>
  </section>
  <!-- / menu -->  
 <center>
 	<div style="padding: 20px;">
 		<h3><b>Orders</b></h3>
    <table border="1">
          <th>Order name</th>
          <th>Order Email</th>
          <th>Number of items</th>
			<?php
      $order = $db->prepare("SELECT * FROM `orders` WHERE `order_email` = ? AND `order_date` = ?");
			$order->execute(array($mail, $day));
      $or =$order->fetch(PDO::FETCH_ASSOC);
      $count = $order->rowCount();
      if ($count > 0) {
        echo "
          <tr>
            <td>".$username."</td>
            <td>".$mail."</td>
            <td>".$count."</td>
          </tr>
        ";
      }else{
        echo "You do not have any open order";        
      } 
			?>      
		</table>
	</div>
</center>
</body>
</html>