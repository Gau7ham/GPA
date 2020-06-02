<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	  <title>Gpas Accounts</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Awesome Bubble Navigation with jQuery" />
  <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>	
	<!--Links for Navigation bar-->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nav.css" type="text/css" media="screen"/>	
	<!--Links for slider-->
	<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
 	<!--Links for pop up-->
	<link href="css\style_popup.css" rel="stylesheet"/>
    <link href="css\popup.css" rel="stylesheet"/>
	<!--Search Box style sheet-->
	<link rel="stylesheet" href="css/search.css" type="text/css" media="screen"/>
	    <!--  Code to disable vertical scrollbar in search.css -->
	<!--Links for validation-->
		<script src="js/validation.js" type="text/javascript"></script>
       </head>
<body>
 <!--Gpas Header Bar -->  
    <div class="gpas-header-bar">
    <div class="header content clearfix">
	<a href="start.php"><img img class="logo" src="Images/gpas.png" alt="GPAS" /></a>
	 <span class="signin-button">
  <a id="link-signin" class="g-button" href="login.php" >Sign in</a>
    </span>
    </div>
    </div>

       <!--Bubble Navigation Bar-->
    <div id="content">
    <div class="title"></div>
	<div class="navigation" id="nav">
	<div class="item gpas">
    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
    <a  class="icon"></a>
    <h2>GPAS</h2>
    <ul>
    <li><a href="intro.php">Introduction</a></li>
    <li><a href="innovation.php">Innovation</a></li>
    </ul>
    </div>
    <div class="item home">
    <img src="images/bg_home.png" alt="" width="199" height="199" class="circle"/>
    <a href="home.php" class="icon"></a>
    <h2>Home</h2>
    <ul>
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="services.php">Services</a></li>
    </ul>
    </div>
    <div class="item security">
    <img src="images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
    <a href="security.php" class="icon"></a>
    <h2>Security</h2>
    <ul>
    <li><a href="web.php">Web</a></li>
    <li><a href="system.php">System</a></li>
    <li><a href="mobile.php">Mobile</a></li>
    </ul>
    </div>
    <div class="item technic">
    <img src="images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
    <a href="technology.php" class="icon"></a>
    <h2>Technology</h2>
    <ul>
    <li><a href="overview.php">Overview</a></li>
    <li><a href="doc.php">Document</a></li>
    <li><a href="killfix.php">KillFix</a></li>
    </ul>
    </div>
    <div class="item company">
    <img src="images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
    <a href="organization.php" class="icon"></a>
    <h2>Organization</h2>
    <ul>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="career.php">Careers</a></li>
    </ul>
    </div>
    </div>
    </div>
	<!--Search Form-->	
	<form method="get" action="http://www.gpas.com/search" id="search">
    <input name="q" type="text" size="40" placeholder="Search..." />
    </form>
	<!--Bubble JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript"src="js/motion.js"></script>     
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>	
  <div class="signuponepage main content clearfix"> 
  <h1 class="redtext">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Create a new Gpas Account</h1>
<div class="clearfix">
  <div class="sign-up"> <!--div of Sign up starts here            --> 
  <div class="signup-box"> <!--div of Signup-box starts here            -->
  <!--practice-->
  <form name="myForm" onsubmit="return validateForm();" action="register.php" method="post"  enctype='multipart/form-data'>
 <!--action="register.php"-->
  <!--first name -->
  <div class="form-element multi-field name" id="name-form-element">
  <fieldset>
  <!--Name-->
  <legend><strong>Name<font color="red" >*</font></strong></legend>
  <!--First Name-->  
  <label id="firstname-label" class="firstname">
  <strong>First name</strong>
  <input type="text"  name="finame"  placeholder="First name">
  <!-- hidden text inside the block 
  <span class="placeholder-text" id="firstname-placeholder" style="display: block;">First</span>   -->
  </label>
    <!--Last Name-->
  <label id="lastname-label" class="lastname">
  <strong>Last name</strong>
  <input type="text"  name="lname"  placeholder="Last Name" >
    </label>
  </fieldset> 
   </div><!--first name ends here-->
 <!--Username Starts here-->  
   <div class="form-element email-address" id="gmail-address-form-element">
  <label id="gmail-address-label">
  <strong>  Choose your username<font color="red" >*</font> </strong>
  <input type="text" maxlength="10" autocomplete="on" name="fname">
    </label>
   </div>  
   <!--Username ends here-->
      <!--Email client-->
   <div class="form-element email-address" id="gmail-address-form-element">
  <label id="gmail-address-label">
  <strong>  Your Current Email Address<font color="red" >*</font> </strong>
    <input type="text"  maxlength="30" autocomplete="on"  name="email" placeholder="eg: abc@gpas.com"  >
  </label>
   </div>
  <!--Email ends here-->   
 <!--Secret Question Starts here-->
   <div class="form-element email-address" id="gmail-address-form-element">
  <label id="gmail-address-label">
  <strong>  Enter a security question<font color="red" >*</font> </strong>
  <input type="text"  maxlength="30" autocomplete="on"  name="squestion" placeholder="eg: What's your Birthplace"  ></label>
   </div>
  <div class="form-element email-address" id="gmail-address-form-element">
  <label id="gmail-address-label">
  <strong>  Enter a your answer<font color="red" >*</font> </strong>
  <input type="password"  maxlength="30" autocomplete="on"  name="answer"  >
    </label>
   </div> 
   <!--Secret Question ends here-->  
 <!--Age starts here-->
<div class="form-element" >
  <label id="age">
  <strong>  Enter your Age<font color="red" >*</font> </strong>
  <input type="text" autocomplete="on" maxlength="2" name="age">
    </label>
   </div>
 <!--Age ends here-->
  <!--mobile no -->
     <div class="form-element" >
  <label id="phone-label">
  <strong>Mobile phone<font color="red" >*</font></strong>
  <input type="text" autocomplete="off" maxlength="10"  name="phoneno" >
  </label>
   </div>
  <!--mobile no ends here -->
<!--Birthday starts here--> 
  <div class="form-element multi-field birthday" id="birthday-form-element">
  <fieldset>
  <legend><strong id="BirthdayLabel">Birthday</strong></legend>
  <label id="month-label" class="month">
  <span id="BirthMonthHolder" >
  <select id="BirthMonth" name="bmonth">
  <option value="">Month</option>
  <option value="01" >
  January</option>
  <option value="02" >
  February</option>
  <option value="03" >
  March</option>
  <option value="04" >
  April</option>
  <option value="05" >
  May</option>
  <option value="06" >
  June</option>
  <option value="07" >
  July</option>
  <option value="08" >
  August</option>
  <option value="09" >
  September</option>
  <option value="10" >
  October</option>
  <option value="11" >
  November</option>
  <option value="12" >
  December</option>
  </select>
  </span>
  </label>
  <label id="day-label" class="day">
  <strong>Day</strong>
  <input type="text" maxlength="2" name="bday" placeholder="Day">
  <!-- <span class="placeholder-text" id="birthday-placeholder">Day</span>  -->
  </label>
  <label id="year-label" class="year">
  <strong>Year</strong>
  <input type="text" maxlength="4" name="byear" placeholder="Year">
  <!-- <span class="placeholder-text" id="birthyear-placeholder">Year</span>  -->
  </label>
  </fieldset>
   </div>
<!--Birthday Ends here--> 
<!--Gender -->
  <div class="form-element" id="gender-form-element">
  <label id="gender-label">
  <strong id="GenderLabel">Gender</strong>
  <div id="GenderHolder" >
  <select id="Gender" name="Gender">
  <option value="">I am...</option>
  <option value="FEMALE" >
  Female</option>
  <option value="MALE" >
  Male</option>
  <option value="OTHER" >
  Other</option>
  </select>
  </div>
  </label>
  </div>
  <!--Country Code-->
  <div class="form-element" id="country-code-form-element">
  <label id="country-code-label">
  <strong id="CountryCodeLabel">Location</strong>
  <div id="CountryCodeHolder" >
  <select id="CountryCode" name="CountryCode">
  <option value="AF"
                            
                            >
  Afghanistan 
  </option>
  <option value="AX"
                            
                            >
  Aland Islands (Aland)
  </option>
  <option value="AL"
                            
                            >
  Albania (Shqiperia)
  </option>
  <option value="DZ"
                            
                            >
  Algeria 
  </option>
  <option value="AS"
                            
                            >
  American Samoa
  </option>
  <option value="AD"
                            
                            >
  Andorra
  </option>
  <option value="AO"
                            
                            >
  Angola
  </option>
  <option value="AI"
                            
                            >
  Anguilla
  </option>
  <option value="AQ"
                            
                            >
  Antarctica
  </option>
  <option value="AG"
                            
                            >
  Antigua and Barbuda
  </option>
  <option value="AR"
                            
                            >
  Argentina
  </option>
  <option value="AM"
                            
                            >
  Armenia 
  </option>
  <option value="AW"
                            
                            >
  Aruba
  </option>
  <option value="AC"
                            
                            >
  Ascension Island
  </option>
  <option value="AU"
                            
                            >
  Australia
  </option>
  <option value="AT"
                            
                            >
  Austria (Osterreich)
  </option>
  <option value="AZ"
                            
                            >
  Azerbaijan (Azerbaycan)
  </option>
  <option value="BS"
                            
                            >
  Bahamas
  </option>
  <option value="BH"
                            
                            >
  Bahrain
  </option>
  <option value="BD"
                            
                            >
  Bangladesh  
  </option>
  <option value="BB"                       
                            >
  Barbados
  </option>
  <option value="BY"           
                            >
  Belarus  
  </option>
  <option value="BE"
                            
                            >
  Belgium (Belgie)
  </option>
  <option value="BZ"
                            
                            >
  Belize
  </option>
  <option value="BJ"
                            
                            >
  Benin (Benin)
  </option>
  <option value="BM"
                            
                            >
  Bermuda
  </option>
  <option value="BT"
                            
                            >
  Bhutan 
  </option>
  <option value="BO"
                            
                            >
  Bolivia
  </option>
  <option value="BA"
                            
                            >
  Bosnia and Herzegovina (Bosna i Hercegovina)
  </option>
  <option value="BW"
                            
                            >
  Botswana
  </option>
  <option value="BV"
                            
                            >
  Bouvet Island
  </option>
  <option value="BR"
                            
                            >
  Brazil (Brasil)
  </option>
  <option value="IO"
                            
                            >
  British Indian Ocean Territory
  </option>
  <option value="VG"
                            
                            >
  British Virgin Islands
  </option>
  <option value="BN"
                            
                            >
  Brunei
  </option>
  <option value="BG"
                            
                            >
  Bulgaria  
  </option>
  <option value="BF"
                            
                            >
  Burkina Faso
  </option>
  <option value="BI"
                            
                            >
  Burundi (Uburundi)
  </option>
  <option value="KH"
                            
                            >
  Cambodia  
  </option>
  <option value="CM"
                            
                            >
  Cameroon (Cameroun)
  </option>
  <option value="CA"
                            
                            >
  Canada
  </option>
  <option value="IC"
                            
                            >
  Canary Islands (Islas Canarias)
  </option>
  <option value="CV"
                            
                            >
  Cape Verde (Kabu Verdi)
  </option>
  <option value="BQ"
                            
                            >
  Caribbean Netherlands
  </option>
  <option value="KY"
                            
                            >
  Cayman Islands
  </option>
  <option value="CF"
                            
                            >
  Central African Republic (Republique centrafricaine)
  </option>
  <option value="EA"
                            
                            >
  Ceuta and Melilla (Ceuta y Melilla)
  </option>
  <option value="TD"
                            
                            >
  Chad (Tchad)
  </option>
  <option value="CL"
                            
                            >
  Chile
  </option>
  <option value="CN"
                            
                            >
  China 
  </option>
  <option value="CX"
                            
                            >
  Christmas Island
  </option>
  <option value="CP"
                            
                            >
  Clipperton Island (Ile Clipperton)
  </option>
  <option value="CC"
                            
                            >
  Cocos [Keeling] Islands
  </option>
  <option value="CO"
                            
                            >
  Colombia
  </option>
  <option value="KM"
                            
                            >
  Comoros 
  </option>
  <option value="CD"
                            
                            >
  Congo [DRC] (Jamhuri ya Kidemokrasia ya Kongo)
  </option>
  <option value="CG"
                            
                            >
  Congo [Republic] (Congo-Brazzaville)
  </option>
  <option value="CK"
                            
                            >
  Cook Islands
  </option>
  <option value="CR"
                            
                            >
  Costa Rica
  </option>
  <option value="CI"
                            
                            >
  Cote d Ivoire
  </option>
  <option value="HR"
                            
                            >
  Croatia (Hrvatska)
  </option>
  <option value="CU"
                            
                            >
  Cuba
  </option>
  <option value="CW"
                            
                            >
  Cura�ao
  </option>
  <option value="CY"
                            
                            >
  Cyprus 
  </option>
  <option value="CZ"
                            
                            >
  Czech Republic (Ceska republika)
  </option>
  <option value="DK"
                            
                            >
  Denmark (Danmark)
  </option>
  <option value="DG"
                            
                            >
  Diego Garcia
  </option>
  <option value="DJ"
                            
                            >
  Djibouti
  </option>
  <option value="DM"
                            
                            >
  Dominica
  </option>
  <option value="DO"
                            
                            >
  Dominican Republic (Republica Dominicana)
  </option>
  <option value="EC"
                            
                            >
  Ecuador
  </option>
  <option value="EG"
                            
                            >
  Egypt
  </option>
  <option value="SV"
                            
                            >
  El Salvador
  </option>
  <option value="GQ"
                            
                            >
  Equatorial Guinea (Guinea Ecuatorial)
  </option>
  <option value="ER"
                            
                            >
  Eritrea
  </option>
  <option value="EE"
                            
                            >
  Estonia (Eesti)
  </option>
  <option value="ET"
                            
                            >
  Ethiopia
  </option>
  <option value="FK"
                            
                            >
  Falkland Islands [Islas Malvinas]
  </option>
  <option value="FO"
                            
                            >
  Faroe Islands (Foroyar)
  </option>
  <option value="FJ"
                            
                            >
  Fiji
  </option>
  <option value="FI"
                            
                            >
  Finland (Suomi)
  </option>
  <option value="FR"
                            
                            >
  France
  </option>
  <option value="GF"
                            
                            >
  French Guiana (Guyane francaise)
  </option>
  <option value="PF"
                            
                            >
  French Polynesia (Polynesie francaise)
  </option>
  <option value="TF"
                            
                            >
  French Southern Territories (Terres australes francaises)
  </option>
  <option value="GA"
                            
                            >
  Gabon
  </option>
  <option value="GM"
                            
                            >
  Gambia
  </option>
  <option value="GE"
                            
                            >
  Georgia 
  </option>
  <option value="DE"
                            
                            >
  Germany (Deutschland)
  </option>
  <option value="GH"
                            
                            >
  Ghana (Gaana)
  </option>
  <option value="GI"
                            
                            >
  Gibraltar
  </option>
  <option value="GR"
                            
                            >
  Greece 
  </option>
  <option value="GL"
                            
                            >
  Greenland
  </option>
  <option value="GD"
                            
                            >
  Grenada
  </option>
  <option value="GP"
                            
                            >
  Guadeloupe
  </option>
  <option value="GU"
                            
                            >
  Guam
  </option>
  <option value="GT"
                            
                            >
  Guatemala
  </option>
  <option value="GG"
                            
                            >
  Guernsey
  </option>
  <option value="GN"
                            
                            >
  Guinea (Guinee)
  </option>
  <option value="GW"
                            
                            >
  Guinea-Bissau (Guine Bissau)
  </option>
  <option value="GY"
                            
                            >
  Guyana
  </option>
  <option value="HT"
                            
                            >
  Haiti
  </option>
  <option value="HM"
                            
                            >
  Heard Island and McDonald Islands
  </option>
  <option value="HN"
                            
                            >
  Honduras
  </option>
  <option value="HK"
                            
                            >
  Hong Kong 
  </option>
  <option value="HU"
                            
                            >
  Hungary (Magyarorszag)
  </option>
  <option value="IS"
                            
                            >
  Iceland (Island)
  </option>
  <option value="IN"
                            
                              selected
                            
                            >
  India 
  </option>
  <option value="ID"
                            
                            >
  Indonesia
  </option>
  <option value="IR"
                            
                            >
  Iran  
  </option>
  <option value="IQ"
                            
                            >
  Iraq 
  </option>
  <option value="IE"
                            
                            >
  Ireland
  </option>
  <option value="IM"
                            
                            >
  Isle of Man
  </option>
  <option value="IL"
                            
                            >
  Israel  
  </option>
  <option value="IT"
                            
                            >
  Italy (Italia)
  </option>
  <option value="JM"
                            
                            >
  Jamaica
  </option>
  <option value="JP"
                            
                            >
  Japan 
  </option>
  <option value="JE"
                            
                            >
  Jersey
  </option>
  <option value="JO"
                            
                            >
  Jordan 
  </option>
  <option value="KZ"
                            
                            >
  Kazakhstan 
  </option>
  <option value="KE"
                            
                            >
  Kenya
  </option>
  <option value="KI"
                            
                            >
  Kiribati
  </option>
  <option value="KW"
                            
                            >
  Kuwait 
  </option>
  <option value="KG"
                            
                            >
  Kyrgyzstan
  </option>
  <option value="LA"
                            
                            >
  Laos 
  </option>
  <option value="LV"
                            
                            >
  Latvia (Latvija)
  </option>
  <option value="LB"
                            
                            >
  Lebanon  
  </option>
  <option value="LS"
                            
                            >
  Lesotho
  </option>
  <option value="LR"
                            
                            >
  Liberia
  </option>
  <option value="LY"
                            
                            >
  Libya  
  </option>
  <option value="LI"
                            
                            >
  Liechtenstein
  </option>
  <option value="LT"
                            
                            >
  Lithuania (Lietuva)
  </option>
  <option value="LU"
                            
                            >
  Luxembourg
  </option>
  <option value="MO"
                            
                            >
  Macau 
  </option>
  <option value="MK"
                            
                            >
  Macedonia [FYROM] 
  </option>
  <option value="MG"
                            
                            >
  Madagascar (Madagasikara)
  </option>
  <option value="MW"
                            
                            >
  Malawi
  </option>
  <option value="MY"
                            
                            >
  Malaysia
  </option>
  <option value="MV"
                            
                            >
  Maldives
  </option>
  <option value="ML"
                            
                            >
  Mali
  </option>
  <option value="MT"
                            
                            >
  Malta
  </option>
  <option value="MH"
                            
                            >
  Marshall Islands
  </option>
  <option value="MQ"
                            
                            >
  Martinique
  </option>
  <option value="MR"
                            
                            >
  Mauritania 
  </option>
  <option value="MU"
                            
                            >
  Mauritius (Moris)
  </option>
  <option value="YT"
                            
                            >
  Mayotte
  </option>
  <option value="MX"
                            
                            >
  Mexico (Mexico)
  </option>
  <option value="FM"
                            
                            >
  Micronesia
  </option>
  <option value="MD"
                            
                            >
  Moldova (Republica Moldova)
  </option>
  <option value="MC"
                            
                            >
  Monaco
  </option>
  <option value="MN"
                            
                            >
  Mongolia
  </option>
  <option value="ME"
                            
                            >
  Montenegro (Crna Gora)
  </option>
  <option value="MS"
                            
                            >
  Montserrat
  </option>
  <option value="MA"
                            
                            >
  Morocco 
  </option>
  <option value="MZ"
                            
                            >
  Mozambique (Mocambique)
  </option>
  <option value="MM"
                            
                            >
  Myanmar [Burma] 
  </option>
  <option value="NA"
                            
                            >
  Namibia
  </option>
  <option value="NR"
                            
                            >
  Nauru
  </option>
  <option value="NP"
                            
                            >
  Nepal 
  </option>
  <option value="NL"
                            
                            >
  Netherlands (Nederland)
  </option>
  <option value="NC"
                            
                            >
  New Caledonia (Nouvelle-Caledonie)
  </option>
  <option value="NZ"
                            
                            >
  New Zealand
  </option>
  <option value="NI"
                            
                            >
  Nicaragua
  </option>
  <option value="NE"
                            
                            >
  Niger (Nijar)
  </option>
  <option value="NG"
                            
                            >
  Nigeria
  </option>
  <option value="NU"
                            
                            >
  Niue
  </option>
  <option value="NF"
                            
                            >
  Norfolk Island
  </option>
  <option value="MP"
                            
                            >
  Northern Mariana Islands
  </option>
  <option value="KP"
                            
                            >
  North Korea 
  </option>
  <option value="NO"
                            
                            >
  Norway (Norge)
  </option>
  <option value="OM"
                            
                            >
  Oman  
  </option>
  <option value="PK"
                            
                            >
  Pakistan 
  </option>
  <option value="PW"
                            
                            >
  Palau
  </option>
  <option value="PS"
                            
                            >
  Palestinian Territories 
  </option>
  <option value="PA"
                            
                            >
  Panama (Panama)
  </option>
  <option value="PG"
                            
                            >
  Papua New Guinea
  </option>
  <option value="PY"
                            
                            >
  Paraguay
  </option>
  <option value="PE"
                            
                            >
  Peru (Peru)
  </option>
  <option value="PH"
                            
                            >
  Philippines
  </option>
  <option value="PN"
                            
                            >
  Pitcairn Islands
  </option>
  <option value="PL"
                            
                            >
  Poland (Polska)
  </option>
  <option value="PT"
                            
                            >
  Portugal
  </option>
  <option value="PR"
                            
                            >
  Puerto Rico
  </option>
  <option value="QA"
                            
                            >
  Qatar 
  </option>
  <option value="RE"
                            
                            >
  Reunion
  </option>
  <option value="RO"
                            
                            >
  Romania (Romania)
  </option>
  <option value="RU"
                            
                            >
  Russia 
  </option>
  <option value="RW"
                            
                            >
  Rwanda
  </option>
  <option value="BL"
                            
                            >
  Saint Barthelemy (Saint-Barthelemy)
  </option>
  <option value="SH"
                            
                            >
  Saint Helena
  </option>
  <option value="KN"
                            
                            >
  Saint Kitts and Nevis
  </option>
  <option value="LC"
                            
                            >
  Saint Lucia
  </option>
  <option value="MF"
                            
                            >
  Saint Martin (Saint-Martin [partie francaise])
  </option>
  <option value="PM"
                            
                            >
  Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)
  </option>
  <option value="VC"
                            
                            >
  Saint Vincent and the Grenadines
  </option>
  <option value="WS"
                            
                            >
  Samoa
  </option>
  <option value="SM"
                            
                            >
  San Marino
  </option>
  <option value="ST"
                            
                            >
  Sao Tome and Principe (Sao Tome e Principe)
  </option>
  <option value="SA"
                            
                            >
  Saudi Arabia 
  </option>
  <option value="SN"
                            
                            >
  Senegal (Senegal)
  </option>
  <option value="RS"
                            
                            >
  Serbia 
  </option>
  <option value="SC"
                            
                            >
  Seychelles
  </option>
  <option value="SL"
                            
                            >
  Sierra Leone
  </option>
  <option value="SG"
                            
                            >
  Singapore
  </option>
  <option value="SX"                            
                            >
  Sint Maarten
  </option>
  <option value="SK"                            
                            >
  Slovakia (Slovensko)
  </option>
  <option value="SI"                            
                            >
  Slovenia (Slovenija)
  </option>
  <option value="SB"                           
                            >
  Solomon Islands
  </option>
  <option value="SO"                            
                            >
  Somalia (Soomaaliya)
  </option>
  <option value="ZA"                            
                            >
  South Africa
  </option>
  <option value="GS"                            
                            >
  South Georgia and the South Sandwich Islands
  </option>
  <option value="KR"                            
                            >
  South Korea 
  </option>
  <option value="SS"                            
                            >
  South Sudan 
  </option>
  <option value="ES"                            
                            >
  Spain (Espana)
  </option>
  <option value="LK"                            
                            >
  Sri Lanka 
  </option>
  <option value="SD"                            
                            >
  Sudan 
  </option>
  <option value="SR"                            
                            >
  Suriname
  </option>
  <option value="SJ"                            
                            >
  Svalbard and Jan Mayen (Svalbard og Jan Mayen)
  </option>
  <option value="SZ"                            
                            >
  Swaziland
  </option>
  <option value="SE"                            
                            >
  Sweden (Sverige)
  </option>
  <option value="CH"                            
                            >
  Switzerland (Schweiz)
  </option>
  <option value="SY"                            
                            >
  Syria  
  </option>
  <option value="TW"                            
                            >
  Taiwan 
  </option>
  <option value="TJ"                            
                            >
  Tajikistan
  </option>
  <option value="TZ"                            
                            >
  Tanzania
  </option>
  <option value="TH"                            
                            >
  Thailand 
  </option>
  <option value="TL"                            
                            >
  Timor-Leste
  </option>
  <option value="TG"                            
                            >
  Togo
  </option>
  <option value="TK"                            
                            >
  Tokelau
  </option>
  <option value="TO"                            
                            >
  Tonga
  </option>
  <option value="TT"                            
                            >
  Trinidad and Tobago
  </option>
  <option value="TA"                            
                            >
  Tristan da Cunha
  </option>
  <option value="TN"                            
                            >
  Tunisia  
  </option>
  <option value="TR"                            
                            >
  Turkey (Turkiye)
  </option>
  <option value="TM"                            
                            >
  Turkmenistan
  </option>
  <option value="TC"                            
                            >
  Turks and Caicos Islands
  </option>
  <option value="TV"                            
                            >
  Tuvalu
  </option>
  <option value="UM"                            
                            >
  U.S. Outlying Islands
  </option>
  <option value="VI"                            
                            >
  U.S. Virgin Islands
  </option>
  <option value="UG"                            
                            >
  Uganda
  </option>
  <option value="UA"                            
                            >
  Ukraine  
  </option>
  <option value="AE"                            
                            >
  United Arab Emirates 
  </option>
  <option value="GB"                            
                            >
  United Kingdom
  </option>
  <option value="US"                            
                            >
  United States
  </option>
  <option value="UY"                            
                            >
  Uruguay
  </option>
  <option value="UZ"                            
                            >
  Uzbekistan 
  </option>
  <option value="VU"                            
                            >
  Vanuatu
  </option>
  <option value="VA"                            
                            >
  Vatican City
  </option>
  <option value="VE"                          
                            >
  Venezuela
  </option>
  <option value="VN"                          
                            >
  Vietnam (Viet Nam)
  </option>
  <option value="WF"                          
                            >
  Wallis and Futuna
  </option>
  <option value="EH"                            
                            >
  Western Sahara 
  </option>
  <option value="YE"                            
                            >
  Yemen  
  </option>
  <option value="ZM"        
                            >
  Zambia
  </option>
  <option value="ZW"                           
                            >
  Zimbabwe
  </option>
  </select>
  </div>
  </label>
  </div>
  <!--Choose image-->
 <div class="form-element age" id="gmail-address-form-element">
  <strong>Choose Image1:<font color="red" >*</font> </strong><input type="file" name="imgfile1" >
<strong>Choose Image2:</strong><input type="file" name="imgfile2" >
<strong>Choose Image3:</strong><input type="file" name="imgfile3" >
  </div>
  <!--ends Choose image-->
  <!--Terms and conditions apply-->
  <div class="form-element terms-of-service" id="termsofservice-form-element">
  <label id="termsofservice-label">
  <input type="checkbox" value="yes" checked="checked" name="TermsOfService" id="TermsOfService"  >
  <span id="terms-of-service-label">
  <strong>I agree to the GPAS <a target="_blank" id="TosLink" href="terms.php">Terms of Service</a> and <a target="_blank" id="PrivacyLink" href="privacy.php">Privacy Policy</a></strong>
  </span>
  </label>
  <span role="alert" class="errormsg" id="errormsg_0_TermsOfService">
  </span>
  </div> 
  <!--ends:. Terms and conditions apply-->
  <!-- Submit button-->
<div class="form-element nextstep-button">
<input type="submit" value="Next step"class="g-button g-button-submit">
</form>
  <!--practice ends here -->
  </div>
     </div> <!--div of Signup-box ends here            -->
  <!-- About info bar starts here            -->
  <p class="why-information"><a target="_blank" href="contact.php">Contact Us</a> to know why we ask for this information.</p>
     <!-- About info bar ends here            -->
     </div> <!--div of Signup ends here       -->    
    </div> <!--div of Clearfix ends here            -->
</div> <!--Signupone main content clearfix div block-->
	<!--Footer-->
    <div class="gpas-header-bar2">
    <div class="footer content clearfix">
    <ul>
    <li>&copy; 2019 GPAS</li>
    </ul>
    </div>
    </div>
    </body>
</html>