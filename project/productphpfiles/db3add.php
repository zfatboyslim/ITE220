<?
	require_once ('myconfig.php');
?>
<?
	$result = mysqli_query($mydb,"SELECT * FROM products WHERE name='Diablo3'") 
	or die("Error: ".mysqli_error($mydb));
	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
	$productid = $data['id'];
	$productname = $data['name'];
	$price = $data['price'];
	$productimage = $data['productimage'];
	$amount = $_POST["amount"];
	$date = date("Y-m-d h:i:s");
	
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}

		
	$mysql_str = "INSERT INTO `orders`(`productid`,`amount`, `productname`,`username`, `price`, `productimage`, `remark`, `purchasedate`) VALUES ('$productid','$amount','$productname','$ses_user','$price','$productimage','pending','$date')";

   if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }
    mysqli_close($mydb);
	
	
	header('Location: http://localhost/project/fps.php');

?>