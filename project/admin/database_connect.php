<?
	require_once ('myconfig.php');
	require_once ('menu.php');
	$result = $mydb->query("SELECT * FROM student") or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		
		}
		//echo($data[1]['Student_id']);
	
	$result = $mydb->query("SELECT COUNT(*) FROM student") or die("There is SQL Statement error");
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
	

	<table>
	<tr>
		<td>Customer ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>E mail</td>
		<td>Address</td>
		<td>Date of Birth</td>
		<td>User Name</td>
		<td>Password</td>
		
		
		<td>Delete</td>
	</tr>
	
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
			<tr>
				<td><a href="show_detail.php?mydata=2&anotherdata=ABCDEF&customerid=<?= $data[$myrow]['customer_id'] ?>"><?= $data[$myrow]['customer_id'] ?></a></td>
				<td><?= $data[$myrow]['first_name'] ?></td>
				<td><?= $data[$myrow]['last_name'] ?></td>
				<td><?= $data[$myrow]['gender'] ?></td>
				<td><?= $data[$myrow]['email'] ?></td>
				<td><?= $data[$myrow]['address'] ?></td>
				<td><?= $data[$myrow]['date_of_birth'] ?></td>
				<td><?= $data[$myrow]['username'] ?></td>
				<td><?= $data[$myrow]['password'] ?></td>
				
				
				<td><a href="delete.php?customerid=<?= $data[$myrow]['customer_id']?> "onclick="return confirm('Do you really want to delete?')">Delete</a></td>
				
			</tr>
		<? } ?>
	</table>
			<!-- <a href= "inputform.php">Add New Record</a>-->


</body>
</html>