<?php



$user = $_POST["username"];

$pass = $_POST["password"];

	require_once ('config.php');

	$result = $mydb->query("SELECT COUNT(*) FROM users WHERE username = '".$user."' AND password = '".$pass."'");

	$i = 0;

	while($row = mysqli_fetch_array($result))
		{
			$data[$i++] = $row;
		}

	if($data[0][0] > 0){
		echo "login success";

	}
	else{
		echo "login failed";
	}

?>