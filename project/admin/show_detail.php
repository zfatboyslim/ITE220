<?
	require_once ('myconfig.php');

?>

<html>
<head><title></title></head>

<body>


<?
	$getdata = $_GET['mydata'];
	$getanotherdata = $_GET['anotherdata'];
	$getcustomerid = $_GET['customerid'];


	$result = $mydb->query("SELECT * FROM student WHERE customer_id=".$getcustomerid) or die("There is SQL Statement error") ;

	$i = 0;

	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
	}

	echo("<BR />");
	echo("<BR />First Name:".$data[0]['first_name']);
	echo("<BR />Last Name:".$data[0]['last_name']);
	echo("<BR />Gender:".$data[0]['gender']);
	echo("<BR /> Email: ".$data[0]['email']);
	echo("<BR /> Address: ".$data[0]['address']);
	echo("<BR /> Date of Birth: ".$data[0]['date_of_birth']);
	echo("<BR /> User Name: ".$data[0]['username']);
	echo("<BR /> Password: ".$data[0]['password']);
?>

	<BR /><a href="database_connect.php">Back</a>
</body>
</html>