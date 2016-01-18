<?
	session_start();
	require_once("session.php");
	$_SESSION['ses_userid'] = "";
	$_SESSION['ses_username'] = "";
	
	session_destroy();
	header('Location: http://localhost/project/index.php');
?>