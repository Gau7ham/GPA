
<?php
//error_reporting(E_ALL & ~E_NOTICE);

	error_log("REGISTER PAGE", 0);		
error_reporting(0);
						// Output

						
	session_start();					
	$_SESSION['uname']=$_POST['fname'];
		$uname=$_POST['fname'];
// setcookie("user", $uname, time()+3600);

					$flag=0;
	
	$finame=$_POST["finame"];
	$lname=$_POST["lname"];
	$uname=$_POST["fname"];
	$email=$_POST["email"];
	$squestion=$_POST["squestion"];
	$answer=$_POST["answer"];
	$age=$_POST["age"];
	$phoneno=$_POST["phoneno"];
	$bmonth=$_POST["bmonth"];
	$bday=$_POST["bday"];
	$byear=$_POST["byear"];
	$Gender=$_POST["Gender"];
	$CountryCode=$_POST["CountryCode"];


/*	
	echo " welcome session: ".$_SESSION['fname']."<br>" ;
	echo " welcome: ".$_POST["finame"]."<br>";
	echo  "Age is :".$_POST["age"]."<br>"."<br>";

	
	echo $name= $_FILES["imgfile1"]["name"]."<br>";
	echo $type= $_FILES["imgfile1"]["type"]."<br>";
	echo $size= $_FILES["imgfile1"]["size"]."<br>";
	echo $tmp_name=$_FILES["imgfile1"]["tmp_name"]."<br>";
	
	echo $name= $_FILES["imgfile2"]["name"]."<br>";
	echo $type= $_FILES["imgfile2"]["type"]."<br>";
	echo $size= $_FILES["imgfile2"]["size"]."<br>";
	echo $tmp_name=$_FILES["imgfile2"]["tmp_name"]."<br>";
	
	echo $name= $_FILES["imgfile3"]["name"]."<br>";
	echo $type= $_FILES["imgfile3"]["type"]."<br>";
	echo $size= $_FILES["imgfile3"]["size"]."<br>";
	echo $tmp_name=$_FILES["imgfile3"]["tmp_name"]."<br>";
*/	
	

						// Opening Connection...(dblink)
						
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		//die('Could not connect: ' . mysql_error());
		die(mysqli_error($con));
		error_log("SQL database not connected!", 0);
	}
	else{ //echo "<br>connected !"; 
	error_log("SQL database is connected!", 0);
	}
						// Select DB	...(dblink)
	mysqli_select_db($con, "gpa_collg1");
	
						// check weather username already exist
	$result = mysqli_query($con , "SELECT username FROM temp") or die(mysqli_error($con));;

$un=array();

error_log("1", 0);
while ($row = mysqli_fetch_row($result)) {
array_push ($un, $row[0]);
error_log("2", 0);
}
$count =mysqli_num_rows($result);
error_log("3", 0);
$uflag=0;

for($i=0;$i<$count;$i++)
{
	error_log("5", 0);
if($un[$i]== $uname) {
 $uflag=1;
 
 error_log("4", 0);
}
}

						// BIG if 
						if($uflag == 1) 
						{
						echo "Username already exist ! Please select another username !";
						}
						else //do processing
						{

	
						// Catch Image

$img1=$_FILES['imgfile1']['name'];
$img2=$_FILES['imgfile2']['name'];
$img3=$_FILES['imgfile3']['name'];

$imgData =addslashes (file_get_contents($_FILES['imgfile1']['tmp_name']));
$imgData =addslashes (file_get_contents($_FILES['imgfile2']['tmp_name']));
$imgData =addslashes (file_get_contents($_FILES['imgfile3']['tmp_name']));	 
	
				// Add image to DIR
				
$current_time=time();
$uploadpath = "ImageDB/".$current_time; 

$uploadpath1 = $uploadpath.basename($_FILES["imgfile1"]["name"]);
$uploadpath2 = $uploadpath.basename($_FILES["imgfile2"]["name"]);  
$uploadpath3 = $uploadpath.basename($_FILES["imgfile3"]["name"]);  
 

// for loop ayega 3 img ke liye
 $img_ext1 = $_FILES['imgfile1']['type']; 
 $img_ext2 = $_FILES['imgfile2']['type'];
 $img_ext3 = $_FILES['imgfile3']['type'];

  $flag_1=0;
  $flag_2=0;
  $flag_3=0;

 $current_time=time();
 
 if ($img_ext1=="image/jpg"||$img_ext1=="image/jpeg" ) 
{
			//echo "jpg";

			error_log("7", 0);
			
			$uploadedfile = $_FILES['imgfile1']['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);

			list($width,$height) = getimagesize($uploadedfile);  //get image resoln

			$newwidth=640;
			$newheight=412;
			$tmp=imagecreatetruecolor($newwidth,$newheight);

			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



			$filename = "ImageDB/".$current_time.$_FILES['imgfile1']['name'];
error_log("8", 0);
			imagejpeg($tmp,$filename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			error_log("9", 0);

} 
else if	($img_ext1 == "image/png")								//causing ERROR in IE .. img type
	{ 
			//	echo "png";
				$uploadedfile = $_FILES['imgfile1']['tmp_name'];
				$src = imagecreatefrompng($uploadedfile);

				list($width,$height) = getimagesize($uploadedfile);  //get image resoln

				$newwidth=640;
				$newheight=412;
				$tmp=imagecreatetruecolor($newwidth,$newheight);

				imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

				$filename = "ImageDB/".$current_time.$_FILES['imgfile1']['name'];

				imagejpeg($tmp,$filename,100);
				imagedestroy($src);
				imagedestroy($tmp);
	}
	else if($img_ext1 == "image/gif")
		{ 
					//echo "gif";		
					$uploadedfile = $_FILES['imgfile1']['tmp_name'];
					$src = imagecreatefromgif($uploadedfile);

					list($width,$height) = getimagesize($uploadedfile);  //get image resoln

					$newwidth=640;
					$newheight=412;
					$tmp=imagecreatetruecolor($newwidth,$newheight);

					imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



					$filename = "ImageDB/".$current_time.$_FILES['imgfile1']['name'];

					imagejpeg($tmp,$filename,100);
					imagedestroy($src);
					imagedestroy($tmp);
		}
		else { 
				$flag_1=1;
				echo "Please select the first image !";
			//	die('<br>this is no valid image resource'); 
		} 
	


 if ($img_ext2=="image/jpg"||$img_ext2=="image/jpeg" ) 
{
		//	echo "jpg";
			$uploadedfile = $_FILES['imgfile2']['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);

			list($width,$height) = getimagesize($uploadedfile);  //get image resoln

			$newwidth=640;
			$newheight=412;
			$tmp=imagecreatetruecolor($newwidth,$newheight);

			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



			$filename = "ImageDB/".$current_time.$_FILES['imgfile2']['name'];

			imagejpeg($tmp,$filename,100);
			imagedestroy($src);
			imagedestroy($tmp);
} 
else if	($img_ext2 == "image/png")								//causing ERROR in IE .. img type
	{ 
				//echo "png";
				$uploadedfile = $_FILES['imgfile2']['tmp_name'];
			$src = imagecreatefrompng($uploadedfile);

			list($width,$height) = getimagesize($uploadedfile);  //get image resoln

			$newwidth=640;
			$newheight=412;
			$tmp=imagecreatetruecolor($newwidth,$newheight);

			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



			$filename = "ImageDB/".$current_time.$_FILES['imgfile2']['name'];

			imagejpeg($tmp,$filename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	}
	else if($img_ext2 == "image/gif")
		{ 
					//	echo "gif";
							$uploadedfile = $_FILES['imgfile2']['tmp_name'];
				$src = imagecreatefromgif($uploadedfile);

				list($width,$height) = getimagesize($uploadedfile);  //get image resoln

				$newwidth=640;
				$newheight=412;
				$tmp=imagecreatetruecolor($newwidth,$newheight);

				imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



				$filename = "ImageDB/".$current_time.$_FILES['imgfile2']['name'];

				imagejpeg($tmp,$filename,100);
				imagedestroy($src);
				imagedestroy($tmp);
		}
		else { 
		$flag_2=1;
	//	echo "this is no valid image resource";
		} 
		
	

 if ($img_ext3=="image/jpg"||$img_ext3=="image/jpeg" ) 
{
			//	echo "jpg";
				$uploadedfile = $_FILES['imgfile3']['tmp_name'];
				$src = imagecreatefromjpeg($uploadedfile);

				list($width,$height) = getimagesize($uploadedfile);  //get image resoln

				$newwidth=640;
				$newheight=412;
				$tmp=imagecreatetruecolor($newwidth,$newheight);

				imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);



				$filename = "ImageDB/".$current_time.$_FILES['imgfile3']['name'];

				imagejpeg($tmp,$filename,100);
				imagedestroy($src);
				imagedestroy($tmp);
} 
else if	($img_ext3 == "image/png")								//causing ERROR in IE .. img type
	{ 
				//	echo "png";
					$uploadedfile = $_FILES['imgfile3']['tmp_name'];
					$src = imagecreatefrompng($uploadedfile);

					list($width,$height) = getimagesize($uploadedfile);  //get image resoln

					$newwidth=640;
					$newheight=412;
					$tmp=imagecreatetruecolor($newwidth,$newheight);

					imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

				

					$filename = "ImageDB/".$current_time.$_FILES['imgfile3']['name'];

					imagejpeg($tmp,$filename,100);
					imagedestroy($src);
					imagedestroy($tmp);
	}
	else if($img_ext3 == "image/gif")
		{ 
					//	echo "gif";
						$uploadedfile = $_FILES['imgfile3']['tmp_name'];
						$src = imagecreatefromgif($uploadedfile);

						list($width,$height) = getimagesize($uploadedfile);  //get image resoln

						$newwidth=640;
						$newheight=412;
						$tmp=imagecreatetruecolor($newwidth,$newheight);

						imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

				

						$filename = "ImageDB/".$current_time.$_FILES['imgfile3']['name'];

						imagejpeg($tmp,$filename,100);
						imagedestroy($src);
						imagedestroy($tmp);
		}
		else { 
		$flag_3=1;
	//	echo "this is no valid image resource";
		} 
		
 // echo "f1".$flag_1."f2".$flag_2."f3".$flag_3; 


 error_log("10", 0);
 // creating unique names 
  $image_name1 = $uploadpath.$_FILES["imgfile1"]["name"]; 
 // echo "<br>".$image_name1;
  $image_name2 = $uploadpath.$_FILES["imgfile2"]["name"]; 
 // echo "<br>".$image_name2;
  $image_name3 = $uploadpath.$_FILES["imgfile3"]["name"]; 
 // echo "<br>".$image_name3;

  												// Inserting to DB.......Details

												
	if($flag_1==1)
	{echo "<br>No image selected.Please Select an Image !";}
	else if($flag_2==1)
	{$sql="INSERT INTO temp (username,first_name,last_name,email,secrete,ans,age,
	phone_no,dob_month,dob_day,dob_year,gender,country,image1)
VALUES
('$uname','$lanme','$finame','$email','$squestion','$answer','$age','$phoneno','$bmonth','$bday','$byear','$Gender','$CountryCode','$image_name1')";
	}
	else if($flag_3==1)
	{$sql="INSERT INTO temp (username,first_name,last_name,email,secrete,ans,age,phone_no,dob_month,dob_day,dob_year,gender,country,image1,image2)
VALUES
('$uname','$lname','$finame','$email','$squestion','$answer','$age','$phoneno','$bmonth','$bday','$byear','$Gender','$CountryCode','$image_name1','$image_name2')";
	}
	else
	{$sql="INSERT INTO temp (username,first_name,last_name,email,secrete,ans,age,phone_no,dob_month,dob_day,dob_year,gender,country,image1,image2,image3)
VALUES
('$uname','$lname','$finame','$email','$squestion','$answer','$age','$phoneno','$bmonth','$bday','$byear','$Gender','$CountryCode','$image_name1','$image_name2','$image_name3')";
}

	
	
	error_log($sql, 0 );
	error_log($flag_1, 0 );
	error_log($flag_2, 0 );
	error_log($flag_3, 0 );
	error_log($uname, 0 );
	error_log($lname, 0 );
	error_log($finame, 0 );
	error_log($email, 0 );
	error_log($squestion, 0 );
	error_log($answer, 0 );
	error_log($age, 0 );
	error_log($phoneno, 0 );
	error_log($bmonth, 0 );
	error_log($bday, 0 );
	error_log($byear, 0 );
	error_log($Gender, 0 );
	error_log($CountryCode, 0 );	
	error_log($image_name1, 0 );	
	error_log($image_name2, 0 );	
	error_log($image_name3, 0 );
	
							// Creating Image & Storing
  
  list($width,$height) = getimagesize($image_name1);  //get image resoln

  
	if(mysqli_query($con, $sql)){
    error_log( "Records added successfully.",0);
} else{
    error_log(("ERROR: Could not able to execute $sql. " . mysqli_error($con)),0);
}   
	 }
  // Closing Connection
  
mysqli_close($con);
		error_log("-------------------------------------------------------------", 0);			
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
div.ex
{
width:640px;
height:412px;
padding:0px;
border:5px solid gray;
margin:10px;
}

 body 
{
background-size:300px 300px;
}

#container {
		
margin: top;
position:relative;
top: 400px;    /*can change posi...grid*/
left:10px;   /*can change posi...grid*/

			width: 640px;
	
		height: 412px;
	
	}
	
 .passcount {
  border: 1px solid ;
  height: 20px;
  width: 140px;
  margin: -20px 0px 0px 150px;
  }

h2   {color:blue;}
p    {margin-left:50px;}
input  {margin-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; 
padding: 0px;
 border-width: 1px;}
 
</style>
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
	<br>
 
 
 <!--content starts here-->
	<div class="outers min cont clrsfix"> 
    <div class="clrsfix">
    <div class="sig-up">    <!--div of Sign up starts here            -->
    <div class="sinup-box"> <!--div of Signup-box starts here         --> 
 <strong><font size='3' color='indigo'> 
Choose Password:
<div class="passcount" id = "counting" >*</div>
<input type ="button" class='g-button g-button-submit' value = "Un-Click" onclick = "de_count()"/>
<form name="form1" action="After_reg.php?var=<?php echo $uname;?>" method="post" enctype='multipart/form-data'>
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

<br><input type="submit" value="Submit" class="g-button g-button-submit" onclick="pass()"/>
</font>   </strong>
</form>  
</div>
</div>
</div>
</div>

<center>
<div class="ex" id="myDiv">
<?php
// Opening Connection...(dblink)
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	
	
				  // Select DB	...(dblink)
	mysqli_select_db("gpa_collg1", $con); 

$result = mysqli_query($con , "SELECT * FROM temp
WHERE username='$uname'") or die(mysql_error());;



while($row = mysqli_fetch_array($result))
  {
	$image_path= $row['image1'];
 echo "<img src='$image_path' >";
  }
include('onlyflash_firstimg.php');
  
 // } // BIG if
?>
</div>
</center>
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
    <li><a href="terms.php" target="_blank">Terms &amp; Conditions</a></li>
	<li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
    </ul>
    </div>
    </div>
    </body>
</html>
 <? ob_flush(); ?>