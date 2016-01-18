<?
	require_once ('myconfig.php');
	$result = mysqli_query($mydb,"SELECT * FROM products WHERE name='Torchlight 2'") 
	or die("Error: ".mysqli_error($mydb));
	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
?>
<BR />
	<table border=0>
		<tr>
			<td><center><img src="<?= $data['productimage']?>" width="180" height="190" /></center></td>
		</tr>
		<tr><td><center><b>Product Name:</b> <?= $data['name']?></center></td></tr>
		<tr><td><center><b>Price:</b> $<?= $data['price']?></center></td></tr>
		<tr><td><center><?= $data['description']?></center></td></tr>
		<tr><td><center><b>Enter Quantity:</b></center></td></tr>
		<tr><td><center>
		<form method='post' action='productphpfiles/torchadd.php'>
		<select name="amount">
		<option value="1" selected>1</option>
		<option value="2">2</option>
		<option value="3" >3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		</select>
		<tr><td><center>
<?
	if(isset($_SESSION['ses_userid'])){
	$ses_userid = $_SESSION['ses_userid'];
	}
	else{
		$ses_userid = null;
	}
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	
	if($ses_userid != null){
			if($ses_userid == session_id() && $ses_user != ""){
				echo "<input type='submit' value='Add to Cart'>";
			}else{ 
			echo "Login To Add to Cart";
					}
		}else{ echo "Login To Add to Cart";
			}
?>

		</center></td></tr>
		</form>
		</center></td></tr>
	</table>

	

