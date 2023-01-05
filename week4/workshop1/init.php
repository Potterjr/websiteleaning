<form action="#" method="post">
id:<input type="text" name="id"><br>
    name:<input type="text" name="name">
    <input type="submit" value="register">
    <input type="reset" value="cls">
    
</form>
<a href="mall.php">go to shop</a>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];


    $_SESSION["member"] = [
        "id" =>  $id,
        "name" => $name,
        
    ];
    print_r($_SESSION["member"]);
    
}
?>