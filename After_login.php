<?php

//echo "hidden fiel post..".$_POST['H1'];
//echo "Welcome....";

error_log("AFTER LOGIN PAGE", 0);		

session_start();
$uname=$_SESSION["uname"];

//$uname=$_GET['var'];
//echo $uname;

$arr=$_POST['H1'];
$array = explode(",",$arr);

//echo "<br> array...";
for($i=0;$i<sizeOf($array) ;$i++)
{
	// echo "<br>".$array[$i];
}


					// Opening Connection...(dblink)
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error($con));
	}
	else{ //echo "<br>connected !";
	}

	 // Select DB...(dblink)
	mysqli_select_db($con,"gpa_collg1"); 
	
		// Aceesing Grid
	$result="";
	$RawPassword="";

		for($i=0;$i<sizeOf($array) ;$i++)
{
	if($array[$i]=='$1' || $array[$i]=='$2' || $array[$i]=='$3')
	{
//	echo "if $...";
	$RawPassword .=$array[$i];
	}
	else
	{
		// echo "<br>if number...";
		
$result = mysqli_query($con,"SELECT grid_val FROM grid WHERE grid_no='$array[$i]' ") or die(mysqli_error($con));
	
			while($row = mysqli_fetch_array($result))
			{			
			$RawPassword.=$row['grid_val'];
			}
    }
}
// echo "<br>RawPassword :".$RawPassword;

/*
Imagine that you use a hash function that can only run 1 million times per second on the same hardware,
 instead of 1 billion times per second. It would then take the attacker 1000 times longer to brute force a hash.
 60 hours would turn into nearly 7 years!
 */
 
 $NewEncPassword=myhash($RawPassword);
 
function myhash($RawPassword) {  
  //use $unique_salt
    $salt = "f#@V)Hu^%Hgfds";  
    $hash = sha1($salt . $RawPassword);  
  
    // make it take 1000 times longer  
    for ($i = 0; $i < 1000; $i++) {  
        $hash = sha1($hash);  
    }  
  
   return $hash;  
}  

// echo "<br>NewEncPassword :".$NewEncPassword;



$epass=mysqli_query($con , "SELECT Encpass FROM temp
WHERE username='$uname'");
$row = mysqli_fetch_array($epass);
// echo "<br>epass :".$row['Encpass'];
$epass=$row['Encpass'];

if($epass===$NewEncPassword)
{
echo "<br>Login Successfull";
setcookie("user", $uname, time()+3600);
header("Location: home.php");
}
else
{
echo "<div class='ex' id='myDiv'> ";
echo "<br><br><br><br><br><br><center><font color='red'> Password incorrect !</font>"; 
echo "<br><br><form action='login.php' method='post' enctype='multipart/form-data'>
<div class='form-element nextstep-button'>
<input type='submit' value='Go Back'class='g-button g-button-submit'></center></div>";
echo "</div>";
}


session_unset();
session_destroy();
error_log("-------------------------------------------------------------", 0);		

?>