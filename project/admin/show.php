<?
	$myfirstname = $_POST["firstname"];
	$mylastname = $_POST ["lastname"];
	$mygender = $_REQUEST ["gender"];
	
	$mybday = $_POST ["bday"];
	$mybmonth = $_POST ["bmonth"];
	$mybyear = $_POST ["byear"];
	
	$myDOB = $mybyear."/".$mybmonth."/".$mybday;
	
	$myemail = $_POST ["email"];
	$myaddress = $_POST ["address"];
	$myusername = $_POST ["username"];
	$mypassword = $_POST ["password"];
	
	if(isset($_POST["newsletter"])){
	$newsletter = $_POST["newsletter"];
	}
		else{ 
		   $newsletter = "Off";
		   }
	$mysql_str = "INSERT INTO student (first_name, last_name, gender, email, date_of_birth, address, username, password ) VALUES ('$myfirstname', '$mylastname', '$mygender', '$myemail', '$myDOB', '$myaddress', '$myusername', '$mypassword')";



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



		header('Location: http://localhost/project/admin/database_connect.php');



?>	