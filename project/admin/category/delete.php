<?
	require_once ('myconfig.php');
	$myid = $_GET['cid'];
	
	$mysql_str = "DELETE FROM category WHERE c_id='$myid'";
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}
	mysqli_close($mydb);



		header('Location: http://localhost/project/admin/category/database_connect.php');

?>