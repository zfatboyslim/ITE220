<?
	$mycname = $_POST["cname"];
	
	$mysql_str = "INSERT INTO category ( cname ) VALUES ('$mycname')";

	$hostname = "localhost";
	$username = "root";
	$password = "abc12345";
	$dbname   = "stiu";
	
	$mydb = mysqli_connect($hostname, $username, $password, $dbname) or die("There is SQL Database connection error cause: ".mysqli_error());
	
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}
	mysqli_close($mydb);



		header('Location: http://localhost/project/admin/category/database_connect.php');



?>
