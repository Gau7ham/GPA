function validateForm()
{


//<!--first name validation-->
  var x=document.forms["myForm"]["finame"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }

  
//<!--last name validation-->
var x=document.forms["myForm"]["lname"].value;
if (x==null || x=="")
  {
  alert("Last name must be filled out");
  return false;
  }
  

//<!--Username Validation-->
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {
  alert("User name must be filled out");
  return false;
  }
  
  
  

//<!--email validation-->
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
  
//<!--security question validation-->
var x=document.forms["myForm"]["squestion"].value;
var y=document.forms["myForm"]["answer"].value;
if (x==null || x=="")
  {
  alert("Security Question must be filled ");
  return false;
  }
  else
if (y==null || y=="")
  {
  alert("Security answer must be filled ");
  return false;
  }

  //<!--age-->
var x=document.forms["myForm"]["age"].value;
  var numbers = /^[0-9]+$/;  
if (x==null || x=="")
  {
  
  alert("age must be filled out");
 
  return false;
  }
else
if(!(x.match(numbers) && 0<x<=100))  
{  
alert('age must have numeric characters ');  
return false;  
} 
  
//<!--validate phone number-->
 
  var x=document.forms["myForm"]["phoneno"].value;
  // var numbers = /^[0-9]+$/;  
if(x=="")
{
alert("please Enter the Contact Number");
document.forms["myForm"]["phoneno"].focus();
return false;
}
if(isNaN(x))
{
alert("Enter the valid Mobile Number(Like : 9566137117)");
document.forms["myForm"]["phoneno"].focus();
return false;
}else
if(!(x.length==10))
{
alert(" Your Mobile Number must be of 10 digits.");
document.forms["myForm"]["phoneno"].focus();
return false;
}
//<checkbox validation>
/*
ErrorText= "";
if ( ( form.TermsOfService.checked == false ) ) 
{
alert ( "In order to use our services, you must agree to Gpas Terms of Service." ); 
return false;
}
if (ErrorText= "") { form.submit() }

alternate code
 var x=document.getElementById("TermsOfService").defaultChecked;
if(x=='true')
return true;

*/


}