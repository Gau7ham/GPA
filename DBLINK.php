<?php
	private $user ="root";
	private $pass ="123";
	private $link ="localhost";

	// Opening Connection
	$con = mysqli_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	else{echo "<br>connected !";}
						// Select DB	
	mysqli_select_db("gpa_collg1", $con);
	
	// Closing connection
	mysqli_close($con);

?>