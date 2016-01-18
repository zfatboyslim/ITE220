<?
	require_once ('myconfig.php');
?>
<?UPDATE `orders` SET `remark`='CheckedOut' WHERE username='" . $_SESSION['ses_username'] ."'
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	$result = mysqli_query($mydb,"SELECT * FROM orders WHERE username='" . $_SESSION['ses_username'] ."'") 
	or die("Error: ".mysqli_error($mydb));
	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
	
	$result = $mydb->query("SELECT COUNT(*) FROM orders WHERE username='" . $_SESSION['ses_username'] ."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
	$countdata[$i++] = $row;
		
		}
	$totalrecord = $countdata[0][0];
	
	$productid = $data['productid'];
	$amount = $data["amount"];
	$productname = $data['productname'];
	$user = $data['username'];
	$price = $data['price'];
	$productimage = $data['productimage'];
	
	
	for($myrow=0; $myrow <$totalrecord; $myrow++) {	
	$mysql_str = "INSERT INTO `paidorders`(`productid`,`amount`, `productname`,`username`, `price`, `productimage`) VALUES ('$productid','$amount','$productname','$user','$price','$productimage')";
	if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }
	$mysql_sts = "DELETE FROM `orders` WHERE username='" . $_SESSION['ses_username'] ."'";
	if (!mysqli_query($mydb,$mysql_sts))
    {
    die('Error: ' . mysqli_error($mydb));
    }
	}
	echo "<center><h1>CHECKOUT COMPLETE</h1></center>";
	echo "<center><h1>Thank you for shopping with us!</h1></center>";
	header( "refresh:3;url=http://localhost/project/myaccount.php" );
?>