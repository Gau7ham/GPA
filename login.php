<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	  <title>Gpas Accounts</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Awesome Bubble Navigation with jQuery" />
  <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>	
	<!--Links for Navigation bar-->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/lnav.css" type="text/css" media="screen"/>	
 	<!--Links for pop up-->
	<link href="css\style_popup.css" rel="stylesheet"/>
    <link href="css\popup.css" rel="stylesheet"/>
	<!--Search Box style sheet-->
	<link rel="stylesheet" href="css/search.css" type="text/css" media="screen"/>
	    <!--  Code to disable vertical scrollbar in search.css -->
       </head>
    <body>  
	 <!--Gpas Header Bar -->  
    <div class="gpas-header-bar">
    <div class="header content clearfix">
	<a href="start.php"><img img class="logo" src="Images/gpas.png" alt="GPAS" /></a>
	<span class="signup-button">
  <br>
  New to Gpas?
  <a id="link-signup" class="g-button g-button-red" href="signup.php">
  Create an account
  </a>
  </span>
    </div>
    </div>     
       <!--Bubble Navigation Bar-->
    <div id="content">
    <div class="title"></div>
	<div class="navigation" id="nav">
	<div class="item gpas">
    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
    <a  class="icon"></a>
    <h2>GPAS</h2>
    <ul>
    <li><a href="intro.php">Introduction</a></li>
    <li><a href="innovation.php">Innovation</a></li>
    </ul>
    </div>
    <div class="item home">
    <img src="images/bg_home.png" alt="" width="199" height="199" class="circle"/>
    <a href="home.php" class="icon"></a>
    <h2>Home</h2>
    <ul>
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="services.php">Services</a></li>
    </ul>
    </div>
    <div class="item security">
    <img src="images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
    <a href="security.php" class="icon"></a>
    <h2>Security</h2>
    <ul>
    <li><a href="web.php">Web</a></li>
    <li><a href="system.php">System</a></li>
    <li><a href="mobile.php">Mobile</a></li>
    </ul>
    </div>
    <div class="item technic">
    <img src="images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
    <a href="technology.php" class="icon"></a>
    <h2>Technology</h2>
    <ul>
    <li><a href="overview.php">Overview</a></li>
    <li><a href="doc.php">Document</a></li>
    <li><a href="killfix.php">KillFix</a></li>
    </ul>
    </div>
    <div class="item company">
    <img src="images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
    <a href="organization.php" class="icon"></a>
    <h2>Organization</h2>
    <ul>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="career.php">Careers</a></li>
    </ul>
    </div>
    </div>
    </div>
	<!--Search Form-->	
	<form method="get" action="http://www.gpas.com/search" id="search">
    <input name="q" type="text" size="40" placeholder="Search..." />
    </form>
	<!--Bubble JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript"src="js/motion.js"></script>     
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>
	   
  <div class="main content clearfix">
	 <div class="sign-in">
<div class="signin-box">
  <h2>Sign in <strong></strong></h2>
 <form name="myForm" onsubmit="return validateForm();" action="disp.php" method="post" enctype='multipart/form-data'>
  <input type="hidden" name="continue" id="continue" value="">
  
 
<div class="email-div">
     <label for="Email"><strong class="email-label">Username</strong></label>
   <input type="text" maxlength="30" autocomplete="on" name="uname">
</div>
  <input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Sign in">
  <label class="remember" onclick="">
  <input type="checkbox" name="PersistentCookie" id="PersistentCookie" value="yes" checked="checked">
  <strong class="remember-label">
  Stay signed in
  </strong>
  </label>
  <input type="hidden" name="rmShown" value="1">
  </form>
  <ul>
  <li>
  <a id="link-forgot-passwd" href="secretq.php" target="_top">
  Can't access your account?
  </a>
  </li>
  </ul>
</div>
  </div>
 
</div>


<!--Footer-->
    <div class="gpas-header-bar2">
    <div class="footer content clearfix">
    <ul>
    <li>&copy; 2019 GPAS</li>
    <li><a href="terms.php" target="_blank">Terms &amp; Conditions</a></li>
	<li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
    </ul>
    </div>
    </div>

<body onload="load()">
<?php
error_reporting (E_ALL ^ E_NOTICE);
$content = $_GET['content'];

if ($content== "sq"){
include ('secretq.php');
}

?>
	</body>
</html>