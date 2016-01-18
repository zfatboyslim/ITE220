<?
	if(isset($_POST["username"]))
		{
			$var_username = $_POST["username"];
		}
	if(isset($_POST["password"]))
		{
			$var_password = $_POST["password"];
		}
	
	

	$hostname = "localhost";
	$username = "root";
	$password = "abc12345";
	$dbname = "stiu";
	
	$mydb = mysqli_connect($hostname,$username,$password,$dbname) or die("There is Database connection error");

	$result = $mydb->query("SELECT COUNT(*) FROM loginadmin WHERE user='$var_username' AND password='$var_password'") or die("There is SQL statement error");

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
			header('Location: http://localhost/project/admin/choosepage.php');
			
		}
		else
		{
			echo("<font color='red'>Login Failed...</font><BR />");
			echo("<a href='admin.php'>Login Again</a>");
		}
?>
	
	
</body>
</html>
