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
		
	</tr>
	
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
			<tr>
				<td><a href="show_detail.php?mydata=2&anotherdata=ABCDEF&username=<?= $data[$myrow]['username'] ?>"><?= $data[$myrow]['username'] ?></a></td>
				<td><?= $data[$myrow]['productid'] ?></td>
				<td><?= $data[$myrow]['productname'] ?></td>
				<td align="right"><?= $data[$myrow]['amount'] ?></td>
				<td align="right"><?= $data[$myrow]['price'] ?></td>
				<td><a href="edit.php?remark=<?= $data[$myrow]['remark']?>"><?= $data[$myrow]['remark'] ?></td>
				<td><?= $data[$myrow]['paymentmethod'] ?></td>
				
				<!--<td><center><img src="../../<?= $data[$myrow]['productimage']?>" width="180" height="190" /></center></td>
				
				<td><a href="edit.php?productid=<?= $data[$myrow]['id']?>">Edit</a></td>
			
			     <td><a href="delete.php?id=<?= $data[$myrow]['id']?> "onclick="return confirm('Do you really want to delete?')">Delete</a></td>-->
				</tr>
		<? } ?>
	</table>
			

</body>
</html>