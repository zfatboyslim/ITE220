<? 
	
	$myproduct = $_POST["productname"];
	$myprice = $_POST["price"];
	$myinfo = $_POST["info"];
	$mycategory = $_POST["type"];

	$mysql_str = "INSERT INTO products (name, price, description, category ) VALUES ('$myproduct', '$myprice', '$myinfo', '$mycategory' )";

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



		header('Location: http://localhost/project/admin/product/database_connect.php');



?>


