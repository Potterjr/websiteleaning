<?php

include_once 'class.data.php';
$obj = new data();


if (isset($_POST["login"])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
   $obj->login($id,$password);
}
else{
    echo "error";
    header( "refresh:2;url=main.php" );
}
?>