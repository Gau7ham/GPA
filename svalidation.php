<?php
$uname=$_POST['H1'];  /* sent from action=".php?var=<?php echo $uname;?>" */
$answer=$_POST['answer'];

						// Opening Connection...(dblink)
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	else{//echo "<br>connected !";
	}
						// Select DB	...(dblink)
	mysqli_select_db($con , "gpa_collg1");
	
$result = mysqli_query($con , "SELECT * FROM temp
WHERE username='$uname'") or die(mysqli_error());;

while($row = mysqli_fetch_array($result))
  {
if($row['ans']==$answer)
{echo "Valid User!";
header("Location: set_new_pass.php?var=$uname");
}
else{
echo "<font color='red'>Error: Incorrect answer</font>"; 
echo "<br><br><form action='secretq.php' method='post' enctype='multipart/form-data'>
<div class='form-element nextstep-button'>
<input type='submit' value='Go Back'class='g-button g-button-submit'>
</form>
</div>";}

  }
  

?>