<a href="viewcart.php">
<?php
if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}
// count products in cart
$cart_count=count($_SESSION['cart_items']);
?>
View Cart 
</a>
<BR /><BR />
Items in Cart:
<?php echo $cart_count; ?>