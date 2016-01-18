<?
	require_once ('myconfig.php');

?>
<?
	$getcustomer = $_GET['username'];

	
	$result = $mydb->query("SELECT * FROM student WHERE username ='$getcustomer'") or die("There is SQL Statement error") ;


	while($row = mysqli_fetch_array($result)){
		
		$data = $row;
	}
	
	
	
	echo("<BR />");
	echo("<BR />First Name:".$data['first_name']);
	echo("<BR />Last Name:".$data['last_name']);
	echo("<BR />Gender:".$data['gender']);
	echo("<BR /> Email: ".$data['email']);
	echo("<BR /> Address: ".$data['address']);
	echo("<BR /> Date of Birth: ".$data['date_of_birth']);
	echo("<BR /> User Name: ".$data['username']);
	echo("<BR /> Password: ".$data['password']); 
?>

	<BR /><a href="database_connect.php">Back</a>
</body>
</html>