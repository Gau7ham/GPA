var garray = [];
var c=1;
garray[0]="$1";

//for indication of password div
var x = 0;
var clicks = [];
clicks[0]="*";

function myFunction(x)
{
garray.push(x);
//alert(c+","+garray[c]);
//c++;	// value set to 1 when page reloaded
//display();
count();

}
function change()
{
var y=document.getElementById("mySelect").selectedIndex;
var z=document.getElementsByTagName("option")[y].value;
garray.push(z);
//alert(z);
var zs=z.substring(1);
//alert(zs);

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("myDiv").innerHTML=xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","change_image.php?q="+zs,true);
xmlhttp.send();

count();
}
function count()
{
document.getElementById("counting").innerHTML = "";
x += 1;
clicks.push("*");
var p=clicks.join('');
document.getElementById("counting").innerHTML = p;
}
function de_count()
{
document.getElementById("counting").innerHTML = "";
x -= 1;
clicks.pop("*");
garray.pop();
var p=clicks.join('');
document.getElementById("counting").innerHTML = p;
}

/*function display()
{
for(var i=0;i<garray.length;i++)
alert("display:"+garray[i]);
}


function click_val()
{
var str="";
var click=garray.length;
for(var i=0;i<click;i++)
str = str.concat("1");

}
*/

function pass()
{
	document.getElementById('hidden1').value = garray;
}

