<?
	require_once ('myconfig.php');
	$mystatus = $_GET['remark'];
	
	//connect to database
	$result = $mydb->query("SELECT * FROM orders WHERE remark=" .$mystatus) or die("There is SQL Statement error");
	
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		}
	
?>

<html>
<head><title></title></head>
<body>
<table align="center">
<form method="post" action="save.php">
<tr>
			<td>Status</td>
			<td>
				<input type="radio" name="status" value="CheckedOut" checked />Checked Out
				<input type="radio" name="status" value="pending" />Pending
			</td>
		</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" value="Rename">
<input type="button" value="Back" onClick="window.location.href='http://localhost/project/admin/order/database_connect.php'">
</td>
</tr>


</form>

</table>
</body>
</html>