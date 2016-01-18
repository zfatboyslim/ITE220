<? 
	$hostname = "localhost";
	$username = "root";
	$password = "abc12345";
	$dbname   = "stiu";
	
	$mydb = mysqli_connect($hostname, $username, $password, $dbname) or die("There is SQL Database connection error cause: ".mysqli_error());
	
?>