<?php

include 'config/db_connect.php';
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
if($action=='added'){
        echo "<strong>{$name}</strong> was added to your cart!";
}
 
if($action=='exists'){
        echo "<strong>{$name}</strong> already exists in your cart!";
}
 
$query = "SELECT id, name, price, description, category FROM products ORDER BY name";
$stmt = $con->prepare( $query );
$stmt->execute();
 
$num = $stmt->rowCount();
 
if($num>0){
echo "<BR /><BR />";
echo "<center>";
    //start table
    echo "<table border='1'>";
 
        // our table heading
        echo "<tr>";
            echo "<th>Product Name</th>";
			echo "<th>Description</th>";
            echo "<th>Price (USD)</th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
 
            //creating new table row per record
            echo "<tr>";
                echo "<td>";
                echo "<div>{$name}</div>";
				echo "</td>";
				echo "<td>";
                echo "{$description}";
				echo "</td>";
                echo "<td>&#36;{$price}</td>";
                echo "<td>";
				
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
                    echo "<a href='add_to_cart.php?id={$id}&name={$name}'>";
                        echo "Add to Cart";
                    echo "</a>";
			}else{
				echo "<div style='text-align:left'>Please Login to Purchase</div>";
			}
	}else{
				echo "<div style='text-align:left'>Please Login to Purchase</div>";
	}
                echo "</td>";
            echo "</tr>";
        }
 
    echo "</table>";
	echo "</center>";
}
 
// tell the user if there's no products in the database
else{
    echo "No products found.";
}
 
?>