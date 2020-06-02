<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db     = 'gpa_collg1';


$conn  = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(! $conn){
  die('Could not connect connect: ') ;
}

echo 'Successfully Connected';


$sql = 'Connected Successfully';
  $retvalue = mysqli_query($sql);

  if(! $retvalue){
    die('Cannot connect to SQL: ');
  }

echo 'DataBase test_db13 has successfully created';

mysqli_close($conn);

 ?>