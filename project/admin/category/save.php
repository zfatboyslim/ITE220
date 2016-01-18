<?
	require_once ('myconfig.php');
	$myid = $_POST["cid"];
	$mystatus = $_POST["status"];
	
	
	
	$mysql_str = "UPDATE category SET remark='$mystatus' WHERE c_id='$myid'";
	
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}
	mysqli_close($mydb);



		header('Location: http://localhost/project/admin/order/database_connect.php');
?>