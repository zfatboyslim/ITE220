<?
	require_once ('myconfig.php');
	$myid = $_GET['customerid'];
	
	$mysql_str = "DELETE FROM student WHERE customer_id='$myid'";
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}
	mysqli_close($mydb);



		header('Location: http://localhost/project/admin/database_connect.php');

?>