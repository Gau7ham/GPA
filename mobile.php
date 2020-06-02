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
    <link rel="stylesheet" href="css/nav.css" type="text/css" media="screen"/>	
	<!--Links for slider-->
	<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
 	<!--Links for pop up-->
	<link href="css\style_popup.css" rel="stylesheet"/>
    <link href="css\popup.css" rel="stylesheet"/>
	<!--Search Box style sheet-->
	<link rel="stylesheet" href="css/search.css" type="text/css" media="screen"/>
	    <!--  Code to disable vertical scrollbar in search.css -->
	<!--Content box style sheet-->
<link rel="stylesheet" href="css/contentbox.css" type="text/css" media="screen"/>
<!--Block content css-->
<link rel="stylesheet" href="css/blockbox.css" type="text/css" media="screen"/>
<!--Links for deactivate alert-->
    <script src="js/deactivatealert.js" type="text/javascript"></script>          
       </head>
    <body>
   <!--Gpas Header Bar -->  
    <div class="gpas-header-bar">
    <div class="header content clearfix">
	<a href="start.php"><img img class="logo" src="Images/gpas.png" alt="GPAS" /></a>
    </div>
    </div>
    <!--Bubble Navigation Bar-->
    <div id="content">
    <div class="title"></div>
<div class="navigation" id="nav">
	<?php
		if(include('check_log.php'))
		echo " 
		<div class='item user1'>
           <img src='Images/bg_usergreen.png' alt='' width='199' height='199' class='circle' />
                    <a  class='icon' ></a>
                    <h2><strong>" . $_COOKIE["user"] . "</strong></h2>
                    <ul>
                        <li><a href='logout.php'>Logout</a></li>
<li><a href='#' onClick='checkbox()'>Deactivate</a></li>
                                </ul>
                </div> ";
		else
		echo " 
		<div class='item user'>				
           <img src='Images/bg_user.png' alt='' width='199' height='199' class='circle' />
                    <a  class='icon' ></a>
                    <h2>User</h2>
                    <ul>
						<li><a href='login.php'>Login</a></li>
						<li><a href='signup.php'>Sign Up</a></li>					
                    </ul>
                </div> ";
	?>
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
	<br>	<br>
	<br>	<br>
	
	
				
<?php
echo "
<!--content starts here-->
	 <div class='outer mn cnt clrfix'>
   
    <div class='clrfix'>
      <div class='si-up'> <!--div of Sign up starts here            -->
    <div class='siup-box' > <!--div of Signup-box starts here            --> ";
$log=include('check_log.php');

if ($log==true)
{
echo "
<center>
 <h1><font face='Hobo Std' color='#0052A3' size='6'>MOBILE SECURITY</font></h1>
</center>	
	
<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>Image-Based Authentication For Mobile</font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;Enterprise organizations and mobile developers can use image-based authentication to secure mobile applications and mobile transactions, or to authenticate mobile users in a variety of situations.
<br>&nbsp;&nbsp;&nbsp;Employees personal mobile phones and tablets are increasingly being used to access highly sensitive information in the workplace. Implementing strong authentication that is easy to use on mobile devices is critically important for businesses wanting to secure mobile transactions and protect sensitive data on mobile devices.
</font></p>

<center><img src='Images/8.png'></center>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>Deployment</font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;Mobile libraries available for: iOS, Android, Windows Mobile.
</font></p>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>Mobile Developers</font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;For more information on our image-based mobile authentication technology, including deployment options and native applications, or to integrate our mobile authentication technology with your mobile applications, view our mobile APIsand documentation.
</font></p>


</div>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
   </div>
   </div>
   </div>";
}
else
{
echo "<center><strong><font color='red' size='3'>Please Login or Create An Account to view content of this page.</font></strong></center><br>

   </div>
   </div>
   </div>
   </div>
   <br>
   <br>
  "; 
echo "
	   
  <div class='main content clearfix'>
	 <div class='sign-in'>
<div class='signin-box'>
  <h2>Sign in <strong></strong></h2>
 <form name='myForm' onsubmit='return validateForm();' action='disp.php' method='post' enctype='multipart/form-data'>
  <input type='hidden' name='continue' id='continue' value=''>
  
 
<div class='email-div'>
     <label for='Email'><strong class='email-label'>Username</strong></label>
   <input type='text' maxlength='30' autocomplete='on' name='uname'>
</div>
  <input type='submit' class='g-button g-button-submit' name='signIn' id='signIn' value='Sign in'>
  <label class='remember' onclick=''>
  <input type='checkbox' name='PersistentCookie' id='PersistentCookie' value='yes' checked='checked'>
  <strong class='remember-label'>
  Stay signed in
  </strong>
  </label>
  <input type='hidden' name='rmShown' value='1'>
  </form>
  <ul>
  <li>
  <a id='link-forgot-passwd' href='secretq.php' target='_top'>
  Can't access your account?
  </a>
  </li>
  </ul>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
";}
echo "
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<!--Footer-->
    <div class='gpas-header-bar2'>
    <div class='footer content clearfix'>
    <ul>
    <li>&copy; 2019 GPAS</li>
    <li><a href='terms.php' target='_blank'>Terms &amp; Conditions</a></li>
	<li><a href='privacy.php' target='_blank'>Privacy Policy</a></li>
    </ul>
    </div>
    </div>
	";
?>
   
	
    </body>
</html>