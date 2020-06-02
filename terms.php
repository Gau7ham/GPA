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
	<!--Content box style sheet-->
<link rel="stylesheet" href="css/contentbox.css" type="text/css" media="screen"/>
<!--Block content css-->
<link rel="stylesheet" href="css/blockbox.css" type="text/css" media="screen"/>
 <!--Links for deactivate alert-->
    <script src="js/deactivatealert.js" type="text/javascript"></script>           
	   <style>
ol.a {
list-style-type:decimal;
list-style-position:inside;
}
</style>
	   </head>
    
	<body>
    <!--Gpas Header Bar -->  
    <div class="gpas-header-bar">
    <div class="header content clearfix">
	<a href="start.php"><img img class="logo" src="Images/gpas.png" alt="GPAS" /></a>
    </div>
    </div>
    <!--Bubble Navigation Bar-->
    <div id="content">
    <div class="title"></div>
	<div class="navigation" id="nav">
	<?php
		if(include('check_log.php'))
		echo " 
		<div class='item user1'>
           <img src='Images/bg_usergreen.png' alt='' width='199' height='199' class='circle' />
                    <a  class='icon' ></a>
                    <h2><strong>" . $_COOKIE["user"] . "</strong></h2>
                    <ul>
                        <li><a href='logout.php'>Logout</a></li>
<li><a href='#' onClick='checkbox()'>Deactivate</a></li>
                               </ul>
                </div> ";
		else
		echo " 
		<div class='item user'>				
           <img src='Images/bg_user.png' alt='' width='199' height='199' class='circle' />
                    <a  class='icon' ></a>
                    <h2>User</h2>
                    <ul>
						<li><a href='login.php'>Login</a></li>
						<li><a href='signup.php'>Sign Up</a></li>					
                    </ul>
                </div> ";
	?>
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
	<br>	<br>
	<br>	<br>
	<br>	<br>
<!--content starts here-->
	 <div class="outer mn cnt clrfix">
   
    <div class="clrfix">
      <div class="si-up"> <!--div of Sign up starts here            -->
    <div class="siup-box" > <!--div of Signup-box starts here            --> 
   <center><h1><font face="Hobo Std" color="#0052A3" size="6">TERMS AND CONDITION</font></h1></center>
	
	<b><h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">GPAS Order Terms and Terms of Service</font></h5>
	
	<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">ORDER TERMS:</font></h5>
	</b>
	<h5><font face="Times New Roman" color="#00000" size="3">&nbsp;&nbsp;&nbsp;Free Widget on Customer’s website per month.  For served per month, please contact us for pricing.
<br>&nbsp;&nbsp;&nbsp;Free 30 day trial for GPAS Mobile Widget. Pricing for the GPAS Mobile Widget is served per month and starts as low as $15 per month. Contact us for more information on pricing for GPAS Mobile Widget.
<br>&nbsp;&nbsp;&nbsp;BY CLICKING THE <b>I ACCEPT</b> BUTTON OR CHECKBOX IN THE REGISTRATION PAGES OF THE SERVICE, THE ENTITY YOU REPRESENT (THE <b>CUSTOMER</b>) IS HEREBY AGREEING WITH GPAS, INC. TO THE ORDER TERMS ABOVE AND THE FOLLOWING TERMS OF SERVICE AND ANY TERMS INCORPORATED HEREIN BY SPECIFIC REFERENCE (COLLECTIVELY, THE <b>TERMS</b>).
CUSTOMER HAS READ, UNDERSTANDS AND AGREES TO THE TERMS AND CONDITIONS OF THIS AGREEMENT.
<br>&nbsp;&nbsp;&nbsp;For good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the parties agree as follows:

</font></h5>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">1. Definitions.</font></h5>

<p><font face="Times New Roman" size="3">
<ol class=“a”>
<li>&nbsp;&nbsp;&nbsp;1.1 “GPAS” means the image-based authentication solution made available through the Service for display on Customer’s website.
</li><li>&nbsp;&nbsp;&nbsp;1.2 “GPAS Mobile Widget” means the image-based authentication solution made available through the Service for display on Customer’s mobile website.
</li><li>&nbsp;&nbsp;&nbsp;1.3 “GPAS” means (i) the GPAS name, the GPAS logo, the GPAS domain name, the product and service names associated with the Service, and other trademarks and service marks; and (ii) software and other works or authorship, APIs, hardware, products, processes, algorithms, user interfaces, know-how and other trade secrets, techniques, designs, inventions and other tangible or intangible technical material or information owned or provided by GPAS.
</li><li>&nbsp;&nbsp;&nbsp;1.4 “GPAS APIs” or “APIs” shall mean GPAS application program interface(s), and any component or element thereof, used to access the Service and the display the GPAS Widget programmatically.
</li><li>&nbsp;&nbsp;&nbsp;1.5 “Order Terms” means the terms for the Service set forth above, as well as any subsequent purchases agreed to between the parties from time to time and deemed incorporated into this Agreement.
</li><li>&nbsp;&nbsp;&nbsp;1.6 “Service” means GPAS web-based services and associated options allowing Customer to configure and display a GPAS Widget.
</li>
</ol>
</font></p>


<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">2. Use of the Service.</font></h5>
<p><font face="Times New Roman" size="3">
<ol class=“a”>
<li>&nbsp;&nbsp;&nbsp;2.1 License; Provision of Service. Subject to the terms and conditions of this Agreement, GPAS grants Customer during the Term pursuant to the terms and conditions set forth in this Agreement and any and all Order Terms: a non-exclusive, non-transferable, non-sublicense able (i) right to access and use the Service, and (ii) license to use the GPAS API to publicly display the GPAS Widget on Customer’s website, and display the GPAS logo in connection with the display of the GPAS Widget. Confident will provide commercially reasonable support of the Service through electronic mail.
</li><li>&nbsp;&nbsp;&nbsp;2.2 Customer Responsibilities. Customer understands that it is responsible for maintaining the confidentiality of passwords Customer uses to access the Service. Accordingly, Customer is responsible for all activities that occur under Customer"s user accounts. Customer shall: (i) use commercially reasonable efforts to prevent unauthorized access to, or use of, the Service, and notify GPAS promptly of any such unauthorized use; (ii) obtain and maintain any equipment and ancillary services needed to connect to, access or otherwise use the Service; and (iii) comply with all applicable local, state, federal, and foreign laws in using the Service.
</li><li>&nbsp;&nbsp;&nbsp;2.3 Restrictions. Customer shall not (i) modify, copy or create derivative works based on the Confident Technology; (ii) disassemble, reverse engineer, or decompile the GPAS, (iii) access it in order to (A) build a competitive product or service, (B) build a product or service using similar ideas, features, functions or graphics of the Service, or (C) copy any ideas, features, functions or graphics of the Service, (iv) license, sublicense, sell, resell, rent, lease, transfer, assign, distribute, time share or otherwise commercially exploit or make the Service available to any third party, other than as contemplated by this Agreement; (v) interfere with or disrupt the integrity or performance of the Service or the data contained therein; or (vi) attempt to gain unauthorized access to the Service or its related systems or networks.
</li><li>&nbsp;&nbsp;&nbsp;2.4 Reservation of Rights. Customer acknowledges that the GPAS is covered by intellectual property rights owned or licensed by GPAS. Other than as expressly set forth in this Agreement, no license or other rights in or to the GPAS are granted to Customer, and all such licenses and rights are hereby expressly reserved.
</li><li>&nbsp;&nbsp;&nbsp;2.5 Advertising Provisions. Customer acknowledges that use of available “billboard” or “in grid” advertising is subject to the following stipulations: (i) GPAS has the right to utilize the SSR shield for advertising purposes, (ii) Customer may opt out of advertising features and choose to pay the current list price for the most current version of GPAS available in the general marketplace (iii) If Customer chooses to utilize for advertising purposes for financial gain, Customer must contact GPAS to structure a revenue share agreement.  If a formal arrangement is not structured, Customer will pay GPAS 50% of net revenue associated with the advertising.
</ol>
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">3. Warranties & Disclaimers.</font></h5>
<p><font face="Times New Roman" size="3">
<ol class=“a”>
<li>&nbsp;&nbsp;&nbsp;3.1 Warranties. Each party represents and warrants that it has the corporate authority to enter into this Agreement.
</li><li>&nbsp;&nbsp;&nbsp;3.2 Disclaimer. EXCEPT AS EXPRESSLY PROVIDED HEREIN, CONFIDENT MAKES NO WARRANTY OF ANY KIND TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, WHETHER EXPRESSED, IMPLIED, STATUTORY, OR OTHERWISE, INCLUDING, BUT NOT LIMITED TO ANY WARRANTY OF MERCHANTABILITY, NONINFRINGEMENT, FITNESS FOR A PARTICULAR PURPOSE OR THAT THE SERVICE WILL BE FREE FROM ERROR OR UNINTERRUPTED.
</li></ol>
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">4. Limitation of Liability.</font></h5>
<p><font face="Times New Roman" size="3">
<ol class=“a”>
<li>&nbsp;&nbsp;&nbsp;4.1 Limitation of Liability. EXCEPT FOR OBLIGATIONS UNDER ARTICLE 3, IN NO EVENT SHALL GPAS AGGREGATE LIABILITY ARISING OUT OF OR RELATED TO THIS AGREEMENT, WHETHER IN CONTRACT, TORT OR UNDER ANY OTHER THEORY OF LIABILITY, EXCEED THE AMOUNTS PAID OR PAYABLE BY CUSTOMER AND DUE FROM CUSTOMER HEREUNDER.
</li><li>&nbsp;&nbsp;&nbsp;4.2 Exclusion of Consequential and Related Damages. IN NO EVENT SHALL GPAS HAVE ANY LIABILITY TO CUSTOMER FOR ANY LOSS OF PROFITS, LOSS OF USE, ERROR OR INTERRUPTION OF USE OR FOR LOSS OR INACCURACY OR CORRUPTION OF DATA, COSTS OF PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES, OR FOR ANY INDIRECT, SPECIAL, INCIDENTAL, PUNITIVE, OR CONSEQUENTIAL DAMAGES HOWEVER CAUSED AND, WHETHER IN CONTRACT, TORT OR UNDER ANY OTHER THEORY OF LIABILITY, WHETHER OR GPAS HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</li></ol>
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">5. Term & Termination.</font></h5>
<p><font face="Times New Roman" size="3">
<ol class=“a”>
<li>&nbsp;&nbsp;&nbsp;5.1 Term of Agreement. This Agreement commences on the Effective Date and continues until terminated by either party. Either party may terminate this Agreement for any reason upon 30 days written notice to the other party.
</li><li>&nbsp;&nbsp;&nbsp;5.2 Suspension of Service. GPAS reserves the right to suspend the Service provided to Customer, without liability to Customer, if Customer breaches the terms of the Agreement or exceeds the use limitations set forth in the Order Terms.
</li><li>&nbsp;&nbsp;&nbsp;5.3 Surviving Provisions. The following provisions shall survive any termination or expiration of this Agreement: Sections 3 (excluding Section 3.1), 4, 5, and 6.
</li>
</ol>
</font></p>

<h5><font face="Tekton Pro Ext" color="#4DB8FF" size="4">6. General Provisions.</font></h5>
<p><font face="Times New Roman" size="3">
<ol class=“a”>
<li>&nbsp;&nbsp;&nbsp;6.1 Notices. All notices under this Agreement shall be in writing and shall be deemed to have been given upon: (i) personal delivery; (ii) the third business day after deposit with the India mail; (iii) the second business day after sending by confirmed facsimile; (iv) the second business day after sending by confirmed nationally recognized courier service. Notices to parties shall be sent to the address and to the contact person specified in the Order Terms.
</li><li>&nbsp;&nbsp;&nbsp;6.2 Assignment. Customer may not assign any of its rights or obligations hereunder, whether by operation of law or otherwise, without the prior express written consent of GPAS.
</li><li>&nbsp;&nbsp;&nbsp;6.3 Governing Law. This Agreement shall be governed exclusively by the internal laws of the State of Maharashtra, without regard to its conflicts of laws rules.
</li><li>&nbsp;&nbsp;&nbsp;6.4 Export Control Laws. Each party shall comply with all India and foreign export control laws or regulations applicable to its performance under this Agreement.
</li><li>&nbsp;&nbsp;&nbsp;6.5 Entire Agreement. This Agreement, including all exhibits and addenda hereto and all Order Terms executed hereunder, constitutes the entire agreement between the parties, and supersedes all prior and contemporaneous agreements, proposals or representations, written or oral, concerning its subject matter. No modification, amendment, or waiver of any provision of this Agreement shall be effective unless in writing and signed by the party against whom the modification, amendment or waiver is to be asserted. In the event of any conflict between the provisions in these Terms and any Order Terms, the terms of such Order Terms shall prevail to the extent of any inconsistency.
</li>
</ol>
</font></p>

</div>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
   </div>
   </div>
   </div>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<br>	<br>
	<!--Footer-->
    <div class="gpas-header-bar2">
    <div class="footer content clearfix">
    <ul>
    <li>&copy; 2019 GPAS</li>
    <li><a href="terms.php" target="">Terms &amp; Conditions</a></li>
	<li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
    </ul>
    </div>
    </div>
    </body>
</html>