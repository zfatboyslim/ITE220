<?php
	$request = $_GET['q'];

	if($request == login){
		$user = $_POST['login-username'];
		$pass = $_POST['login-password'];

		if($user == 'admin' && $pass == '1234'){
			session_start();
			$_SESSION['username'] = $user;
			$_SESSION['ses_username'] = $userid;
			$_SESSION['ses_userid'] = session_id();
			header("location:welcome.php");
		}
		else{
			header("location:index.php?q=error");
		}
	}
	else{
		header("location:index.php");
	}

?>