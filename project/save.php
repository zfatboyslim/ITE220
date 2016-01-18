<?
  session_start();
?>
<?
	require_once ('myconfig.php');
	$myfirstname = $_POST["first_name"];
	$mylastname = $_POST["last_name"];
	$myemail = $_REQUEST["email"];
	$myaddress = $_REQUEST["address"];
	$myusername = $_REQUEST["username"];
	$mypassword = $_REQUEST["password"];
	
	
	$mysql_str = "UPDATE student SET first_name='$myfirstname',last_name='$mylastname', email='$myemail', address='$myaddress', username='$myusername', password='$mypassword' WHERE username='" . $_SESSION['ses_username'] ."'";
	
	if(!mysqli_query($mydb, $mysql_str)){
		echo(mysqli_error());
		die;
	}
	require_once("session.php");
	$_SESSION['ses_userid'] = "";
	$_SESSION['ses_username'] = "";
	
	session_destroy();
	echo "<center><h1>CHANGE COMPLETE</h1></center>";
	echo "<center><h1>YOU WILL BE REDIRECTED in 6 SECONDS</h1></center>";
	echo "<center><h1>PLEASE LOGIN WITH NEW DETAILS</h1></center>";
	header( "refresh:6;url=http://localhost/project/index.php" );
?>