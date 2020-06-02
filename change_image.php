<html>
<?php

					
// Opening Connection...(dblink)
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	
	
	
				  // Select DB	...(dblink)
	mysqli_select_db($con , "gpa_collg1"); 
	
session_start();	
$uname=$_SESSION["uname"];
	
//get the q parameter from URL
$q=$_GET["q"];

$response=0;
$image_path1=0;
$image_path2=0;
$image_path3=0;
$result = mysqli_query($con , "SELECT * FROM temp
WHERE username='$uname'") or die(mysqli_error());;


while($row = mysqli_fetch_array($result))
  {
 
	$image_path1= $row['image1'];
	$image_path2= $row['image2'];
	$image_path3= $row['image3'];
	
  }
 
if($q==1 && $image_path1!=null)
{$response=$image_path1;
echo "<img src='$response' >";
include('onlyflash_firstimg.php');
}else
if($q==2 && $image_path2!=null)
{$response=$image_path2;
echo "<img src='$response' >";
include('onlyflash_firstimg.php');
}else
if($q==3 && $image_path3!=null)
{$response=$image_path3;
echo "<img src='$response' >";
include('onlyflash_firstimg.php');
}else{echo "No image available";}



?>


</html>
