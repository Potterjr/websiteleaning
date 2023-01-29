<?php
include("conn.php");
$id = $_POST['id'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if (isset($_POST['submit'])) {
    if ($password1 === $password2) {
        $insert = [
            "command" => "INSERT INTO `reglog`(`id`, `password`) VALUES ('$id','$password1')"];
        $res = $db->exec($insert["command"]);
        echo $res;
        echo" <a href='login.html'>login</a>";
    } else {
        echo "error password";
        echo" <a href='register.html'>register</a>";
    }
} else {
    echo "error submit";
    echo" <a href='register.html'>register</a>";
}
