<?
require_once ('myconfig.php');
?>
<?
	$result = $mydb->query("SELECT * FROM orders WHERE username='".$_SESSION['ses_username']."' AND remark='pending'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
		
		}

	
	$result = $mydb->query("SELECT COUNT(*) FROM orders WHERE username='" . $_SESSION['ses_username'] ."' AND remark='pending'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
		
		}

		$totalrecord = $countdata[0][0];
?>
<?

?>
<center><h2>Your Shopping Cart:</h2>
	<table border=0>	
	<tr>
		<td>Product Name</td>
		<td></td>
		<td>Amount</td>
		<td>Price</td>
		<td>Purchase Date</td>
		<td></td>
	</tr>
		<?if($totalrecord > 0){?>
		<? for($myrow=0; $myrow <$totalrecord; $myrow++) { ?>
		<tr>
			<td><?= $data[$myrow]['productname'] ?></td>
			<td><img src="<?= $data[$myrow]['productimage']?>" width="50" height="50" /></td>
			<td><?= $data[$myrow]['amount'] ?></td>
			<td>$<?= $data[$myrow]['price'] ?></td>
			<td><?= $data[$myrow]['purchasedate']?></td>
			<td><a href="delete.php?productname=<?= $data[$myrow]['productname']?> "onclick="return confirm('Do you really want to delete?')">Delete</a></td>
		</tr>
			<?}}
			else{ 
			echo "No Products Found";}
			?>	
	</table>
	<form method='post' action='checkout.php'>
	<select name="paymentmethod">
	<option value="Paypal" selected>Paypal</option>
	<option value="CreditCard">CreditCard</option>
	</select>
<?if($totalrecord > 0){
echo "<input type='submit' value='Check Out'>";}
else{
echo "";}
?>


	</form>
	</center>