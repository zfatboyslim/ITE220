<?
	require_once ('myconfig.php');
?>
<?
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	$result = mysqli_query($mydb,"SELECT * FROM orders WHERE username='" . $_SESSION['ses_username'] ."' AND remark='pending'") 
	or die("Error: ".mysqli_error($mydb));
	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
	
	$r = mysqli_query($mydb,"SELECT * FROM student WHERE username='" . $_SESSION['ses_username'] ."'") 
	or die("Error: ".mysqli_error($mydb));
	
	while($rew = mysqli_fetch_array($r)) {
	$d = $rew;
	}
	$address = $d['address'];
	
	$result = $mydb->query("SELECT COUNT(*) FROM orders WHERE username='" . $_SESSION['ses_username'] ."' AND remark='pending'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
	$countdata[$i++] = $row;
		
		}
	$totalrecord = $countdata[0][0];
	$paymentmethod = $_POST['paymentmethod'];


	
	for($myrow=0; $myrow <$totalrecord; $myrow++) {	
	$mysql_str = "UPDATE `orders` SET `remark`='CheckedOut', `paymentmethod`='$paymentmethod',`address`='$address'  WHERE username='".$_SESSION['ses_username']."' AND remark='pending'";
	}
	if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }
    mysqli_close($mydb);
	
	echo "<center><h1>CHECK OUT COMPLETE</h1></center>";
	echo "<center><h1>Thank you for shopping with us!</h1></center>";
	header( "refresh:3;url=http://localhost/project/index.php" );
?>