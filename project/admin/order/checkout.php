<?
	require_once ('myconfig.php');
	$productname = $_GET['productname'];
	
	$result = mysqli_query($mydb,"SELECT * FROM orders WHERE productname='$productname'") 
	or die("Error: ".mysqli_error($mydb));
	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
	
	$mysql_str = "UPDATE `orders` SET `remark`='CheckedOut' WHERE productname='$productname'";
	
	if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }
	
	header("Location:http://localhost/project/admin/order/database_connect.php");
?>