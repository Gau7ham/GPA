<?php
setcookie ("user", "", time() - 3600);
session_destroy();
session_unset();
$_SESSION["uname"]=null;
header('Location: start.php');

?>