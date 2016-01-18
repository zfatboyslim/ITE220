<?
	require_once ('myconfig.php');
	$result = mysqli_query($mydb,"SELECT * FROM student WHERE username='" . $_SESSION['ses_username'] ."'") 
	or die("Error: ".mysqli_error($mydb));

	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
?>
<form method='post' action='save.php'>
<h2><center>User Details:</center></h2>
<BR /><BR />
<center>
<table border='1'>
<tr>
<td></td>
<td></td>
<td>NEW DETAILS</td>
</tr>
<tr>
<td><B>First Name:</B></td>
<td><?= $data['first_name']?></td>
<td><input type='text' name='first_name'/></td>
</tr>
<tr>
<td><B>Last Name:</B></td>
<td><?= $data['last_name']?></td>
<td><input type='text' name='last_name'/></td>
</tr>
<tr>
<td><B>Email:</B></td>
<td><?= $data['email']?></td>
<td><input type='text' name='email'/></td>
</tr>
<tr>
<td><B>Address:</B></td>
<td><?= $data['address']?></td>
<td><input type='text' name='address'/></td>
</tr>
<tr>
<td><B>Username:</B></td>
<td><?= $data['username']?></td>
<td><input type='text' name='username'/></td>
</tr>
<tr>
<td><B>Password:</B></td>
<td>*********</td>
<td><input type='text' name='password'/></td>
</tr>
<tr>
<td>
</td>
<td>
</td>
<td>
<input type='submit' value='Edit' />
<input type='reset' value='Reset' />
</td>
</tr>
</form>
</table>
</center>

