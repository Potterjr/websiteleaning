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
                "Tesla Model Y" => 5,
                "Condo SanSri" => 10,
                "ford" => 15,

            ];
            foreach ($product as $item => $price) {
                echo '<option value="' . $item . '">' . $item . ' (' . $price . ')</option>';
            }
            ?>
        </select><br>
        <input type="number" name="Qty" min="0" max="99" require>
        <input type="radio" name="opt" value="add">Add Item
        <input type="radio" name="opt" value="remove">Remove Item
        <input type="submit" value="update cart">
        <input type="reset" value="res">
        <a href="init.php">back</a>
    </form>
    
</body>

</html>
<?php

require_once("cart.php");
print_r($_POST);
?>