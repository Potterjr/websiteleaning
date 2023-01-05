<form action="#" method="post">
    id:<input type="text" name="id"><br>
    name:<input type="text" name="name">
    <input type="submit" value="register">
    <input type="reset" value="cls">
    
</form>
<button ><a href="mall.php">goto mall</a></button>
<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the user's ID and password from the form
    $id = $_POST['id'];
    $name = $_POST['name'];

    // Store the user's ID and password in the session
    $_SESSION["member"] = [
        "id" =>  $id,
        "name" => $name,
        
    ];
    print_r($_SESSION["member"]);
    
}