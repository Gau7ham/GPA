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
<!--content starts here-->
	 <div class="outer mn cnt clrfix">
   
    <div class="clrfix">
      <div class="si-up"> <!--div of Sign up starts here            -->
    <div class="siup-box" > <!--div of Signup-box starts here            -->
   <center><h1><font face="Hobo Std" color="#0052A3" size="6">PRIVACY POLICY</font></h1></center>
	
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;This Privacy Policy explains the collection, use, and disclosure of Personal Information through our web site. 
<b>Personal Information</b> means information that would allow a party to contact you, including, for example, your full name, address, telephone number, or email address.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Submitted Information</font></h5>
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;We collect Personal Information about you when you submit information or requests to us (through this website or otherwise). We use your submitted information to send you emails that you have requested, and for administrative purposes (such as to notify you about changes to this Privacy Policy). In emails we send you, we provide a method to unsubscribe from future emails.
When you submit your email address as part of our Alert application, we use this address for no purpose other than to email you the alerts that you requested. Your email address is deleted from our database when you remove/unsubscribe.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Browsing Information</font></h5>
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp; When you use GPAS Web Sites, our servers (which may be hosted by a third party service provider) may collect information indirectly and automatically (through, for example, the use of your IP address) about your activities while visiting the site, including the web pages you view and the times you view them and information about the browser you are using. We do not link browsing information to the Personal Information you submit to us; we use this browsing information to personalize aspects of your search experience (such as enabling you to save your search location on your PC) and for internal purposes such as to help understand how the site is being used and to improve it, and for systems administration purposes. An IP address is a number that is automatically assigned to your computer when you use the Internet. In some cases your IP address stays the same from browser session to browser session; but if you use a consumer internet access provider, your IP address probably varies from session to session.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Third Party Cookies</font></h5>
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp; We may use third-party advertising companies to serve ads when you visit our website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Disclosure of Personal Information</font></h5>
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp; Although we may disclose aggregated information about the use of our site, that information does not contain Personal Information. We do not disclose Personal Information to third parties in the normal course of operations. Under certain circumstances, however, we could be legally obligated to disclose information to the government or other third parties and if GPAS becomes part of another organization, that organization will possess the Personal Information collected by GPAS and it will assume the rights and obligations regarding your Personal Information as described in this Privacy Policy.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Security</font></h5>
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp; GPAS has implemented and follows industry standard measures to protect against unauthorized access to and unlawful interception or processing of Personal Information. However, no internet site can fully eliminate security risks.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Questions?</font></h5>
<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp; If you have questions about this Privacy Policy, please use our contact form.
We hope this policy clarifies our procedures regarding your Personal Information. We may amend this policy at any time by sending the amended policy to the email address you provided to us or by posting the amended policy on our site.
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
   </div>

	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<!--Footer-->
    <div class="gpas-header-bar2">
    <div class="footer content clearfix">
    <ul>
    <li>&copy; 2019 GPAS</li>
    <li><a href="terms.php" target="_blank">Terms &amp; Conditions</a></li>
	<li><a href="privacy.php" >Privacy Policy</a></li>
    </ul>
    </div>
    </div>
    </body>
</html>