<?
	require_once ('myconfig.php');
?>
<?
	$myfirstname = $_POST["firstname"];
	$mylastname = $_POST["lastname"];
	$mygender = $_REQUEST["gender"];
	$myemail = $_REQUEST["email"];
	$myaddress = $_REQUEST["address"];
	$myusername= $_REQUEST["username"];
	$mypassword= $_REQUEST["password"];

	$mybday = $_POST["bday"];
	$mybmonth = $_POST["bmonth"];
	$mybyear = $_POST["byear"];
	
	$myDOB =  $mybyear."-". $mybmonth."-".$mybday;


	if(isset($_POST["newsletter"])){
		$mynewsletter = $_POST["newsletter"];
	}
	else{
		$mynewsletter = "No";
	}

	$mysql_str = "INSERT INTO student(first_name,last_name,gender,email,date_of_birth,address,username,password) VALUES ('$myfirstname','$mylastname','$mygender','$myemail','$myDOB','$myaddress','$myusername','$mypassword')";

	if(!mysqli_query($mydb, $mysql_str)){
		echo(mysqli_error());
		die;
	}

	mysqli_close($mydb);


	header('Location: http://localhost/project/registrysuccess.php');

?>