<?
	require_once ('myconfig.php');
	$myid = $_GET['productname'];
	
	$mysql_str = "DELETE FROM orders WHERE productname='$myid'";
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}

	header("Location:http://localhost/project/admin/order/database_connect.php");


?>