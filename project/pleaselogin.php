<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Home</title>

<link href="stylecss.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
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
require("navigation.php");
?>
</center>
</div>
<img src="images/paypal_logo.png" width="300" height="200" />
</div>
  </div>
  <div class="leftbar"></div>
  <div class="contentboxleft">
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
				require("products.php");
			}else{
				require("pleaselogin.php");
			}
	}else{
		require("pleaselogin.php");
	}
?>
</div>
  
  
  
  </div>
 
</div>
<div class="footer">
<br />
&nbsp;&nbsp;<a href="admin/admin.php"><font size="4" color="white">Admin</font></a>
</div>
</body>
</html>