<?
	require_once ('myconfig.php');
	require_once ('menu.php');
	$result = $mydb->query("SELECT * FROM orders") or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		
		}
		//echo($data[1]['Student_id']);
	
	$result = $mydb->query("SELECT COUNT(*) FROM orders") or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
		
		}
		mysqli_close($mydb);
		$totalrecord = $countdata[0][0];
	//echo($totalrecord);
	 
?>
<html>
<head><title></title></head>
<style>
table,th,td
{
border-collapse:collapse;
border:1px solid black;
}

</style>
<body>
	

	<table align="center">
	<tr>
		<td>User Name</td>
		<td>Product ID</td>
		<td>Product Name</td>
		<td>Amount</td>
		<td>Price</td>
		<td>Status</td>
		<td>Payment</td>
		<td>Purchase Date</td>
		<td>Delete</td>
		<td>Status</td>
		<td></td>	
	</tr>
	
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
			<tr>
				<td><a href="show_detail.php?username=<?= $data[$myrow]['username'] ?>"><?= $data[$myrow]['username'] ?></a></td>
				<td><?= $data[$myrow]['productid'] ?></td>
				<td><?= $data[$myrow]['productname'] ?></td>
				<td><?= $data[$myrow]['price'] ?></td>
				<td><?= $data[$myrow]['amount'] ?></td>
				<td><?= $data[$myrow]['remark']?></td>
				<td><?= $data[$myrow]['paymentmethod'] ?></td>
				<td><?= $data[$myrow]['purchasedate'] ?></td>
				<td><a href="delete.php?productname=<?= $data[$myrow]['productname']?> "onclick="return confirm('Do you really want to delete?')">Delete</a></td>
				<td><a href="checkout.php?productname=<?= $data[$myrow]['productname']?>">Checked Out</a></td>
				<td><a href="pending.php?productname=<?= $data[$myrow]['productname']?>">Pending</a></td>
			</tr>
			
		<? } ?>
	</table>
			

</body>
</html>