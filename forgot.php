



<html> 
                     <head><title></title></head> 
                     <body> 
                          <h1>forgot password ! </h1> 
            

<br><br><br>

<br><a href="?content=sq">Secret Question</a>

                     </body> 
                     </html> 

<?php
error_reporting (E_ALL ^ E_NOTICE);
$content = $_GET['content'];

if ($content== "sq"){
include ('secretq.php');
}

?>