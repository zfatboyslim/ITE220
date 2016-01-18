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
		session_start();
		if (!isset($_SESSION['count'])){
			$_SESSION['count'] = 0;
			$_SESSION['ses_username'] = $user;
			$_SESSION['ses_userid'] = session_id();
		}
		else{
			++$_SESSION['count'];
		echo $_SESSION['count'];
		}

	}
	else{
		echo "login failed";
	}

	echo "<br/>";
	echo "<a href='clear_session.php'>Log Out</a><br>";
	echo "Logged In as user: ".$user;
?>