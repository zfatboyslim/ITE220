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
<body>
<style>
table,th,td
{
border-collapse:collapse;
border:1px solid black;
}
</style>
<form enctype="multipart/form-data" action="add.php" method="POST">
<table>
<tr>
<td>Product Name</td><td><input type="text" name="productname"></td>
</tr>
<tr>
<td>Price</td><td><input type="text" name="price"></td>
</tr>
<tr>
<td>Description</td><td><textarea rows="5" cols="20" name="info"></textarea></td>
</tr>
<tr>
<td>Category</td>
<td>
<select name="type">
<option value="0">--Category--</option>
	<?
		for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
		 <option value="<?=$data[$myrow]['cname'] ?>"><?=$data[$myrow]['cname']?></option>
		

	<? } ?>

    </td>
</select>
</tr>


<tr>
<td>Image</td>
<td><input type="file" name="file"><br>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>


</form>

</table>
</body>
</html>

