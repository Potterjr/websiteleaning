<?php
require_once("classshopping.php");
$mycart = new ShoppingCart("Nopphagan T.");
debug($mycart) ;
$mycart->additem("TV 80 inch", 1);
debug($mycart);
$mycart->additem("TV 8@ inch", 2);
debug($mycart);
$mycart->removeItem("TV 90 inch", 2);
$mycart->removeItem("TV 80 inch", 5);
$mycart->removeItem("TV 80 inch", 1);
$mycart->removeItem("TV 80 inch", 2);
debug($mycart);
?>
<?php
function debug($cart){
echo "<pre>";
print_r($cart);
echo "</pre>";
}
?>