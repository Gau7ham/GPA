function checkbox() {
 
  var confirmmessage = "Are you sure you want to continue?";
  var go = "deactivate.php";
  if (confirm(confirmmessage)) {
      window.location = go;
  } else {
       alert(message);
  } 
}
