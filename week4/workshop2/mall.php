<?php
include_once('shoppingcart.php');
echo "<pre>";
print_r("id :". $_SESSION["id"]);
echo "<br>";
print_r("name :". $_SESSION["name"]);
echo "<br>";
print_r($_SESSION["cart"]);
echo "</pre>";
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
<h1>cart</h1>
    <form action="shoppingcart.php" method="post">
    <input type="hidden" name="qty" value=1><br><br>
    <select name="product">
          <?php
          $option = ["หนังสือ", "เสื้อ", "ผ้า"];
          foreach ($option as $opt) {
            echo"<option value ='{$opt}'>{$opt}</option>";
          }?>
        </select>

        <input type="radio" name="addordel" value="add">add
        <input type="radio" name="addordel" value="del">del

        <button type="submit" name="submit">submit</button>


       

    </form>

    <form action="shoppingcart.php" method="post">
        <button type="submit" name="exit">exit</button>
    </form>

</body>
</html>