<?
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	require_once ('myconfig.php');
	$myid = $_GET['productname'];
	
	$mysql_str = "DELETE FROM orders WHERE username='".$_SESSION['ses_username']."' AND productname='$myid'";
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}

	header("Location:http://localhost/project/myaccount.php");


?>