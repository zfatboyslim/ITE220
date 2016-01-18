<?
	if(isset($_POST["username"]))
		{
			$var_username = $_POST["username"];
		}
	if(isset($_POST["password"]))
		{
			$var_password = $_POST["password"];
		}

	require_once ('myconfig.php');
	
	$mydb = mysqli_connect($hostname,$username,$password,$dbname) or die("There is Database connection error");

	$result = $mydb->query("SELECT COUNT(*) FROM student WHERE username='$var_username' AND password='$var_password'") or die("There is SQL statement error");

	$i = 0;

	while($row = mysqli_fetch_array($result))
		{
			$data[$i++] = $row;
		}
?>
<html>
<head><title></title></head>
<body>
<?
	if($data[0][0] > 0)
		{
			session_start();
			$_SESSION['ses_userid'] = session_id();
			$_SESSION['ses_username'] = $var_username;
			header('Location: http://localhost/project/index.php');
		}
		else
		{
			header('Location: http://localhost/project/loginfail.php');
		}
?>
	
	
</body>
</html>