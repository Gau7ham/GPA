<?php
// Opening Connection...(dblink)
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
					  // Select DB	...(dblink)
	mysqli_select_db($con , "gpa_collg1"); 
	
$uname=$_COOKIE["user"];


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
 echo $image_path1;
 echo $image_path2;
 echo $image_path3;

 if($image_path1!=null)
 {
$files = glob($image_path1);
foreach($files as $file) {
    unlink($file);
}
}
 if($image_path2!=null)
 {
$files = glob($image_path2);
foreach($files as $file) {
    unlink($file);
}
} if($image_path3!=null)
 {
$files = glob($image_path3);
foreach($files as $file) {
    unlink($file);
}
}


$sql = "DELETE FROM temp
        WHERE username='$uname'";
		
mysql_query($con , $sql );
echo "Account Deactivated !";

include('logout.php');

?>
