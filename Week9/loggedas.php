<html>
<head>
<title>
</title>
</head>

<body>

<center><font size="4">You are currently logged in as:</font></td></center>
<p></p>
<?php
	echo $_SESSION['ses_username'];
?>
<p></p>
<?php
	
	echo("<a href='logout.php'>Logout</a>")
?>

</body>
</html>