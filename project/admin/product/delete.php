<?
	require_once ('myconfig.php');
	$myid = $_GET['id'];
	
	$mysql_str = "DELETE FROM products WHERE id ='$myid' ";
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}
	mysqli_close($mydb);



		header('Location: http://localhost/project/admin/product/database_connect.php');

?>