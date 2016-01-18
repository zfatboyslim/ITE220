<html>
<head>
<title>
</title>
</head>

<body>

<center><font color="white" size="4">You are currently logged in as:</font></td></center>
<p></p>
<?
	echo $_SESSION['ses_username'];
?>
<p></p>
<?
	
	echo("<a href='logout.php'>Logout</a>")
?>

</body>
</html>

