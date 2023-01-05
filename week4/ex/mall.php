<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        select product:
        <select name="item_name" required>
            <?php
            $product = [
                "Tesla Model Y" => 10,
                "Condo SanSri" => 15,
                "ford" => 20,

            ];
    
            foreach ($product as $item => $price) { 
            
                echo '<option name="p" value="' . $item . '">' . $item . ' (' . $price . ')</option>';
            }
            ?>
        </select><br>
        <input type="number" name="qty" min="0" max="99" require>
        <input type="radio" name="opt" value="add">Add Item
        <input type="radio" name="opt" value="remove">Remove Item
        <input type="submit" value="update cart">
        <input type="reset" value="res">

        <a href="reg.php">session.php</a>
    </form>
    
</body>

</html>
<?php

$opt=$_POST["opt"];
if( isset($opt) == "add") {
    $name = $_SESSION["member"]["name"];
    $qty= $_POST["qty"];
    $selected_item = $_POST['item_name'];
    $price = $product[$selected_item];

    $cout;

 
    $_SESSION["cart"] = [
        "name" => $name,
        "product"=>$selected_item,
        "count"=>$qty,
        "price"=>$price,
     

];

print_r($_SESSION["cart"]);
}

?>