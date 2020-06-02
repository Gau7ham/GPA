<?php

error_log("AFTER REGISTER PAGE", 0);		
session_start();
$uname = $_SESSION["uname"];
// echo $uname;
// echo "hidden fiel post..".$_POST['H1'];
// echo "Welcome....";
$arr=$_POST['H1'];
$array = explode(",",$arr);
						// Opening Connection...(dblink)
						
						try {
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	else{ // echo "<br>connected !";
	}
	
  // Select DB	...(dblink)
	mysqli_select_db($con , "gpa_collg1"); 
	
		// Aceesing Grid
	$result="";
	$RawPassword="";

		for($i=0;$i<sizeOf($array) ;$i++)
{
	if($array[$i]=='$1' || $array[$i]=='$2' || $array[$i]=='$3')
	{
	// echo "if $...";
	$RawPassword .=$array[$i];
	}
	else
	{
	// 	echo "<br>if number...";
		
$result = mysqli_query($con , "SELECT grid_val FROM grid WHERE grid_no='$array[$i]' ") or die(mysqli_error());	
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

$EncPassword=myhash($RawPassword);

error_log($EncPassword, 0 );

// echo "<br>EncPassword :".$EncPassword;

 /*
 mysql_query("INSERT INTO temp (Encpass) 
 VALUES('$EncPassword') WHERE `username`='$uname' ") 
or die(mysql_error());  
*/

error_log($uname , 0 );

mysqli_query($con , "UPDATE temp SET Encpass='$EncPassword'
WHERE username='$uname'");

 // Closing connectoin...(dblink)
 session_destroy();
	mysqli_close($con);
							}
						catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
  mysqli_close($con);
  
  error_log("-------------------------------------------------------------", 0);		
}
	
?>
<center>
<br><br><br><br><h3>Registration successful</h3>
<h5>Redirecting in 5 seconds...</h5></center>
<center><img src="Images/redirecting.gif"> </center>
<!--auto redirect page to home page-->
<META HTTP-EQUIV="refresh" CONTENT="5;URL=login.php">
<br><br><br>