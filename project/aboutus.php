<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>

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
<h1><center>About Us</center></h1>
<center>
<p>Stamford University Gamestore is situated in Stamford University Bangkok International.
We aim to provide excellence in services and products which you can order and have shipped straight to your home!
If you would like to visit our physical store please go to: <BR /><BR/>
16, Motorway Road - Km2, Prawet, Bangkok 10250 Thailand.
<BR />
Latitude : N 13 44.216, Longitude: E 100 39.698
<BR />

<BR /><BR />
<img src="images/campus.png" width="300" height="200" />
</p></center>
</div>
  
  
  
  </div>
 
</div>
<div class="footer">
<br />
&nbsp;&nbsp;<a href="admin/admin.php"><font size="4" color="white">Admin</font></a>
</div>
</body>
</html>