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
   <div class="inner">
<img src="Images/services.jpg" height="200" width="800">
</div>
	<br>
	<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Website Development</font></h5>
	
	<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;Our Websites are unique and eye-catching, designed by using latest web designing tools like Web 2.0, which empowers our customers to represent themselves online confidently in the global arena to generate more revenue.
	<br><br>&nbsp;&nbsp;&nbsp;Image-based authentication can be used as a stand-alone replacement for traditional authentication methods including passwords, tokens, smart cards and ATM.
<br><br>&nbsp;&nbsp;&nbsp;Our web designers can change your ideas into reality by using their creative talent and knowledge of website standards and practices.
<br><br>&nbsp;&nbsp;&nbsp;GPAS focuses on all the aspects of managing a web project involving Web Design image-based authentication and Development life cycle. The development cycle follows ISO Standards.
<br><br>&nbsp;&nbsp;&nbsp;Our technical goal is to provide a powerful Web-Based solution using n-tier architecture to our customers to face today’s emerging Internet scenario.
<br><br>&nbsp;&nbsp;&nbsp;Our web design and development services are implemented taking into consideration Search Engine positioning and placements. We do recommend our clients best web hosting services according to their web structure.
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">Software Development</font></h5>
	
	<p><font face="Times New Roman" size="3">&nbsp;&nbsp;&nbsp;If you are looking for an effective software development company, your search ends here with us! Welcome to GPAS, an Professional Web Design, Web Development Company based at Mumbai, INDIA. We at GPAS provide affordable and quality services to various clients across the Globe.
	<br><br>&nbsp;&nbsp;&nbsp;There is no end to web development companies in the market; globally and in India, but what matters is the ultimate result. Customer satisfaction is our motto and we strive to provide the best solution to our clients.
	<br><br>&nbsp;&nbsp;&nbsp;GPAS is a custom software development company and offer complete cycle of customized software programming services that include offshore web development, product ideas, enhancement and support. At GPAS, we employ a large pool of talented and eligible engineers who come from different backgrounds having well balanced knowledge of current demands.
	<br><br>&nbsp;&nbsp;&nbsp;<u>Why GPAS?</u>
	<br><br>&nbsp;&nbsp;&nbsp;Software Development at GPAS has lots of benefits. Through our custom software development you reduce costs of outsourcing software development and get the best software utility ever. Software developed by us are –
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Highly responsive.
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	They are developed by skilled, trained, experienced and organized engineers.
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Have solid experience gained from diverse software development projects of various degrees of complexities and scopes.
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Our software development methodology is a complete mature step.
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	On time delivery and affordable software application development.
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Cost competitive software development services.
	</font></p>

</div>
   </div>
   </div>
   </div>
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
	
    </body>
</html>