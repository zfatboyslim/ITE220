<?
	require_once ('myconfig.php');
	$myid = $_GET['id'];
	$result = $mydb->query("SELECT * FROM products WHERE id=".$myid) or die("There is SQL Statement error") ;

	$i = 0;

	while($row = mysqli_fetch_array($result))
	{
		$data[$i++] = $row;
	}
?>

<html>
<head><title>This is Edit.php</title></head>
<body>

<form method="post" action="save.php">

</form>
</body>
</html>