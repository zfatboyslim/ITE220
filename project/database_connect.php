<?
	require_once ('myconfig.php');


	$result = $mydb->query("SELECT * FROM student") or die("There is SQL Statement error") ;

	$i = 0;

	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
	}


	$result = $mydb->query("SELECT COUNT(*) FROM student") or die("There is SQL Statement error") ;

	$i = 0;

	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
	}

	mysqli_close($mydb);

	$totalrecord = $countdata[0][0];
?>

<html>
<head><title></title></head>
<body>
	<table border=1>	
	<tr>
		<td>Student ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Email</td>
		<td></td>
		<td></td>
	</tr>
	
	<? for($myrow=0; $myrow < $totalrecord; $myrow++){ ?>
		<tr>
			<td><a href="show_detail.php?mydata=2&anotherdata=ABCDEF&studentid=<?= $data[$myrow]['customer_id'] ?>"><?= $data[$myrow]['student_id'] ?></a></td>
			<td><?= $data[$myrow]['first_name'] ?></td>
			<td><?= $data[$myrow]['last_name'] ?></td>
			<td><?= $data[$myrow]['gender'] ?></td>
			<td><?= $data[$myrow]['email'] ?></td>
			<td><a href="delete.php?studentid=<?= $data[$myrow]['customer_id']?>" onClick="return confirm('Are you sure?');">Delete</a></td>
			<td><a href="edit.php?studentid=<?= $data[$myrow]['customer_id']?>">Edit</a></td>
		</tr>
	<? } ?>
	</table>


<a href="inputform.php">Add New Record</a>

</body>
</html>


