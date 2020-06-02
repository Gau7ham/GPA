<? ob_start(); ?>
<?php

error_log("DISP PAGE", 0);		
session_start();

$_SESSION["uname"]=$_POST['uname'];

// Retrive From DB

$uname=$_SESSION["uname"];

//setcookie("user", $uname, time()+3600);


?>
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
	 <!--Display style sheet and script-->
	<link rel="stylesheet" href="css/disp.css" type="text/css" media="screen"/>
    <script src="js/disp.js" type="text/javascript"></script> 
	<style type="text/css">
.passcount {
  border: 1px solid ;
  height: 20px;
  width: 140px;
  margin: -20px 0px 0px 130px;
  }
</style>

	  </head>   
    <body>
    <!--Gpas Header Bar -->  
    <div class="gpas-header-bar">
    <div class="header content clearfix">
    <img class="logo" src="Images/gpas.png" alt="GPAS">
    </div>
    </div>
    <!--Bubble Navigation Bar-->
    <div id="content">
    <div class="title"></div>
	<div class="navigation" id="nav">
		<div class="item user2">				
           <img src="Images/bg_useryellow.png" alt="" width="199" height="199" class="circle" />
                    <a  class="icon" ></a>
                    <h2>User</h2>
                    <ul>
						<li>Continue</a></li>
						<li>Registration</a></li>				
                    </ul>
                </div> 
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
 <!--content starts here-->
	<div class="outers min cont clrsfix"> 
    <div class="clrsfix">
    <div class="sig-up">    <!--div of Sign up starts here            -->
    <div class="sinup-box"> <!--div of Signup-box starts here         --> 
 <strong><font size="3" color="indigo"><br>Enter Password: 
<div class="passcount" id = "counting" >*</div>
<input type ="button" class='g-button g-button-submit' value = "Un-Click" onclick = "de_count()"/>

 <form name="form1" action="After_login.php" method="post" enctype="multipart/form-data">
Select image:
<select id="mySelect" style="color: rgb(0, 0, 128); font-family: Verdana; font-size: 8pt;" onchange="change()">
<option value="$1"selected="selected">image1</option>
<option value="$2">image2</option>
<option value="$3">image3</option>
</select>
<!--
<button type="button" onclick="change()">Change Image</button>
-->

<input type="hidden" id="hidden1" name="H1" /> 

<br><input type="submit" class='g-button g-button-submit' onclick="pass()"/>
</font>   </strong>
</form>  
</div>
</div>
</div>
</div>
<br>  <br>
<div class="ex" id="myDiv">

	<?php 



 // Opening Connection...(dblink)
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	else{ //echo "<br>connected !";
	}
	
	
				  // Select DB	...(dblink)
	mysqli_select_db($con , "gpa_collg1"); 

$result = mysqli_query($con , "SELECT * FROM temp
WHERE username='$uname'") or die(mysqli_error($con));;

$check =mysqli_num_rows($result);
//echo $check;
if($check == 0) {
echo "<br><br><br><br><br><br><center><font color='red'>Error: Please enter a valid username!</font>"; 
echo "<br><br><form action='login.php' method='post' enctype='multipart/form-data'>
<div class='form-element nextstep-button'>
<input type='submit' value='Go Back'class='g-button g-button-submit'></center></div>";
}
else{
while($row = mysqli_fetch_array($result))
  {
 // echo "<br>id:".$row['id']." <br>age:".$row['age'];
 // echo "<br />";
  $image_path= $row['image1'];
	
 echo "<img src='$image_path' >";
  
include('onlyflash_firstimg.php');
  
	
  
	 // Closing connectoin...(dblink)
	mysqli_close($con);
	
	error_log("-------------------------------------------------------------", 0);		
 }
 }
 
 
  
?>

</div>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
   <!--Footer-->
    <div class="gpas-header-bar2">
    <div class="footer content clearfix">
    <ul>
    <li>&copy; 2019 GPAS</li>
    <li><a href="work.php" target="_blank">Gpas for Work</a></li>
    <li><a href="terms.php" target="_blank">Terms &amp; Privacy</a></li>
    <li><a href="help.php" target="_blank">Help</a></li>
    </ul>
    </div>
    </div>
    </body>
</html>
<? ob_flush(); ?>