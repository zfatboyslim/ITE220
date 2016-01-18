<?
	require_once ('myconfig.php');
	require_once ('menu.php');
	$result = $mydb->query("SELECT * FROM products") or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		
		}
		//echo($data[1]['Student_id']);
	
	$result = $mydb->query("SELECT COUNT(*) FROM products") or die("There is SQL Statement error");
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
		<td>Product ID</td>
		<td>Product Name</td>
		<td>Product Price</td>
		<td>Description</td>
		<td>Category</td>
		<td>Image</td>
		
		<td>edit</td>
		<td>Delete</td>
	</tr>
	
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
			<tr>
				
				<td><?= $data[$myrow]['id'] ?></td>
				<td><?= $data[$myrow]['name'] ?></td>
				<td><?= $data[$myrow]['price'] ?></td>
				<td><?= $data[$myrow]['description'] ?></td>
				<td><?= $data[$myrow]['category'] ?></td>
				
				<td><center><img src="../../<?= $data[$myrow]['productimage']?>" width="100" height="100" /></center></td>
				
				<td><a href="edit.php?id=<?= $data[$myrow]['id']?>">Edit</a></td>
			
			     <td><a href="delete.php?id=<?= $data[$myrow]['id']?> "onclick="return confirm('Do you really want to delete?')">Delete</a></td>
				</tr>
		<? } ?>
	</table>
			<a href= "addproduct.php">Add New Product</a>


</body>
</html>