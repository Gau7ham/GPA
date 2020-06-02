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
    <h1><font face='Hobo Std' color='#0052A3' size='6'>WEB SECURITY</font></h1>
</center>
	
<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>Image-Based Authentication For Websites</font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;GPAS is an image-based authentication technology that gives choice to load more than one image and gives freedom to user’s to click on all images or any one of it. Enterprise organizations and developers can easily integrate GPAS with their websites, web applications or other security solutions for strong authentication without the need for expensive hardware tokens, smart cards or biometrics.
<br>&nbsp;&nbsp;&nbsp;GPAS is also applied in <b>Business Portal</b>, <b>Web Portal</b>, <b>Banking Websites</b> and last but not the least it can be applied for <b>Secure Mail Portal</b> also.
</font></p>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>How it Works:</font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;Read the <a href='doc.php'>data sheet</a> to learn how image-based authentication works.
</font></p>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>Use Cases:</font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;GPAS provides strong Graphic authentication to solve these business issues:
</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='#rp'>Replace passwords</a>
</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='#sp'>Strengthen Passwords</a>
</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='#pf'>Password reset OR Forgot Password</a>
</p>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='rp'>Replace passwords</a></font></h5>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The majority of data breaches at organizations are a result of weak or stolen authentication credentials. Yet, many organizations and websites continue to rely on insecure username/password authentication methods because they do not want to burden their users with complex security requirements.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organizations and web developers can use GPAS to replace insecure, text passwords with an intuitive and highly secure, image-based authentication credential.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPAS provides strong authentication by using more than one image. Yet, all users need to remember are a few part of an images (i.e. grid approach).
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>More Secure, Easier to Use</u>
<ul>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Not susceptible to keyloggers or brute-force dictionary attacks.
</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Easier for people than remembering complex passwords and pass phrases.
</li></font>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='sp'>Strengthen Passwords</a></font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Secure Logins Using GPAS:</u>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;People often choose weak passwords or use the same password for multiple accounts. Such practices can threaten security for not only the individual, but also for the entire website, service or business application. If a hacker is able to access just one user account through weak or stolen credentials, it can quickly escalate to a more widespread security breach.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organizations can use GPAS as an easy and intuitive layer of authentication, to the existing login credentials for strong user authentication. GPAS can strengthen the security of a login by more than 99.999% and protects the account even if the user chose a weak password or had their password compromised.
</font></p>

<font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Strong Security</u>
<ul>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Generates unique, with a limited life span</li>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Not susceptible to keyloggers or brute-force dictionary attacks
</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Adds a strong layer of security without introducing friction for the user
</li>
<ul>
</font>

<font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Deployment Options</u>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPAS is a flexible layer of authentication that can be integrated anywhere a layer of security is needed. It can be easily integrated with risk engines,  identity and access control platforms, or other security solutions.
It can be implemented as:
<ul>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.	Software as a Service (SaaS)
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.	Virtual Appliance
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.	White label or OEM integration with other solutions
</ul>
</font>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='pf'>Password reset OR Forgot Password</a></font></h5>
<p><font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In GPAS a secret question and it answer is assign by the user.
So if in case user want to reset or forget his/her password with the help of secret question they can set a new password.
</font></p>

<h5><font face='Tekton Pro Ext' color='#4DB8FF' size='4'>Configuration Options:</font></h5>
<font face='Times New Roman' size='3'>&nbsp;&nbsp;&nbsp;GPAS provides strong Graphic authentication to solve these business issues:
<ul>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Choose the number of pictures used to set as a password.
</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Dictate whether or not users must click in sequential order.
</li>
</ul>
</font>
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