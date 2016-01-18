<?
	require_once ('myconfig.php');
	require_once ('menu.php');
	
	$result = $mydb->query("SELECT * FROM category") or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		
		}
		
	
	$result = $mydb->query("SELECT COUNT(*) FROM category") or die("There is SQL Statement error");
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
		
		<td>Category</td>
		<td>Edit</td>
		<td>Delete</td>
		
	</tr>
	
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
			<tr>
				<td><?= $data[$myrow]['c_id'] ?></a></td>
				<td><?= $data[$myrow]['cname'] ?></td>
				
				
				<td><a href="edit.php?cid=<?= $data[$myrow]['c_id']?>">Edit</a></td>
				<td><a href="delete.php?cid=<?= $data[$myrow]['c_id']?> "onclick="return confirm('Do you really want to delete?')">Delete</a></td>
				
			</tr>
		<? } ?>
	</table>
			<a href= "newcategory.php">Add New Category</a>


</body>
</html>