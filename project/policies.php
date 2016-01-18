<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Policies</title>

<link href="stylecss.css" rel="stylesheet" type="text/css" />
<?
require("script.php");
?>
</head>

<body onload="MM_preloadImages('images/home1.png','images/myacc1.png','images/policies1.png','images/aboutus1.png','images/contact1.png')">
<div class="topbar">
<img src="images/topbanner.png" width="900" height="150" /> </div>
<div class="navibox">
<?
require("navigationbar.php");
?>

</div>

<div class="content">
  <div class="sidebar">
  <div class="loginbox">
  <br />
    <br />
      <br />
  <center>
  <? 
	session_start();
	if(isset($_SESSION['ses_userid'])){
	$ses_userid = $_SESSION['ses_userid'];
	}
	else{
		$ses_userid = null;
	}
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	
	if($ses_userid != null){
			if($ses_userid == session_id() && $ses_user != ""){
				require("loggedas.php");
			}else{
				require("login.php");
			}
	}else{
		require("login.php");
	}
?>
</center>
  </div>
<div class="products">
<BR />
<font color="white">
<center><h2> Products</h2> </center>
</font>
<ul>
  <li><a href="fps.php"><font color="white">First Person Shooters</font></a></li>
  <li><a href="adventure.php"><font color="white">Adventures</font></a></li>
  <li><a href="mmo.php"><font color="white">MMORPG</font></a></li>
  <li><a href="strategy.php"><font color="white">Strategy</font></a></li>
</ul>

</div>
<div class="lowerbox">
<div class="loginbox">
<BR />
<center><h2>Your Shopping Cart</h2></center>
<center>
<?
	if(isset($_SESSION['ses_userid'])){
	$ses_userid = $_SESSION['ses_userid'];
	}
	else{
		$ses_userid = null;
	}
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	
	if($ses_userid != null){
			if($ses_userid == session_id() && $ses_user != ""){
				require_once ('viewcart.php');
			}else{ 
			echo "Please Login to see cart";
					}
		}else{ echo "Please Login to see cart";
			}
?>
</center>
</div>
<img src="images/paypal_logo.png" width="300" height="200" />
</div>
  </div>
  <div class="leftbar"></div>
  <div class="contentboxleft">
<h1><center>Policies</center></h1>
<center>
<BR />
We will not email you in the future unless you have given us your consent.
<BR />
We will give you the chance to refuse any marketing email from us.
<BR /><BR />
The type of information we collect about you includes:
<BR /><BR />
• Your name<BR />
• Your address<BR />
• Your email address<BR />
• Your phone number<BR />
• Your credit / debit card details<BR />
• Your order history and profile<BR />
<BR /><BR />
We will never collect sensitive information about you without your explicit consent.
<BR />
The information we hold will be accurate and up to date. You can check the information that we hold about you by contacting our Customer Services department.
<BR />
If you find any inaccuracies we will delete or correct them.
<BR />
The personal information which we hold will be held securely in accordance with our internal security policy and the law.
<BR />
To ensure that your credit, debit or charge card is not being used without your consent, we will validate name, address and other personal information supplied by you during the order process against appropriate third party databases. By accepting these terms and conditions you consent to such checks being made. In performing these checks personal information provided by you may be disclosed to a registered Identity Reference Agency which may keep a record of the information. You can rest assured that this is done only to confirm your identity and that there is active credit at the name and address supplied. Please note that although an actual credit check is not performed the search may be logged on your file but your credit rating will be unaffected. All information provided by you will be treated securely and strictly in accordance with the Data Protection Act 1998.
</center>
</div>
  
  
  
  </div>
 
</div>
<div class="footer">
<br />
&nbsp;&nbsp;<a href="admin/admin.php"><font size="4" color="white">Admin</font></a>
</div>
</body>
</html>