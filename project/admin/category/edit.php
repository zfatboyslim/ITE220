<?
	require_once ('myconfig.php');
	$myid = $_GET['cid'];
	
	//connect to database
	$result = $mydb->query("SELECT * FROM category WHERE c_id=" .$myid) or die("There is SQL Statement error");
	
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		}
	
?>

<html>
<head><title></title></head>
<body>
<style>
table,th,td
{
border-collapse:collapse;
border:1px solid black;
}
</style>
<table>
<form method="post" action="save.php">
<input type="hidden" name="cid" value="<?= $data[0]['c_id']?>" />
<tr>
<td>Category name</td><td><input type="text" name="cname" value="<?= $data[0]['cname']?>" /></td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" value="Rename">
<input type="reset" value="Reset">
</td>
</tr>


</form>

</table>
</body>
</html>