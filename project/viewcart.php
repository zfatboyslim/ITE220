<?
require_once ('myconfig.php');
?>
<?
	$result = $mydb->query("SELECT COUNT(*) FROM `orders` WHERE username='" . $_SESSION['ses_username'] ."' AND remark='pending'") 
	or die("Error: ".mysqli_error($mydb));
	$row = $result->fetch_row();
	echo 'Products in Cart: ', $row[0];
	echo "<br />";
	echo "<br />";
	echo "<a href='myaccount.php'>View Cart</a>";
?>

