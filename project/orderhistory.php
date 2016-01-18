<?
require_once ('myconfig.php');
?>
<?
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	$result = $mydb->query("SELECT * FROM orders WHERE username='" . $_SESSION['ses_username'] ."' AND remark='CheckedOut'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		
		}

	
	$result = $mydb->query("SELECT COUNT(*) FROM orders WHERE username='" . $_SESSION['ses_username'] ."' AND remark='CheckedOut'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
		
		}

		$totalrecord = $countdata[0][0];
?>
<?

?>
<center><h2>Order History</h2>
	<table border=0>	
	<tr>
		<td>Product Name</td>
		<td></td>
		<td>Amount</td>
		<td>Price</td>
		<td>Date Purchased</td>
		<td>Payment Method</td>
	</tr>
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
		<tr>
			<td><?= $data[$myrow]['productname'] ?></td>
			<td><img src="<?= $data[$myrow]['productimage']?>" width="50" height="50" /></td>
			<td><?= $data[$myrow]['amount'] ?></td>
			<td><?= $data[$myrow]['price'] ?></td>
			<td><?= $data[$myrow]['purchasedate'] ?></td>
			<td><?= $data[$myrow]['paymentmethod']?></td>
		</tr>
			<? } ?>
			
			
	</table>
	<a href="myaccount.php">Return to My Account</a>
	</center>