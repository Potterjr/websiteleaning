<?php
session_start();
echo "<pre>";
$_SESSION["test"][] = 1;
$_SESSION["test"][] = 2;
$_SESSION["test"][] = 3;
$_SESSION["test"][] = 4;

$getarray = array();
foreach ($_SESSION["test"] as $value) {
    $getarray[] = $value;
}

foreach ( $getarray as $i) {
   echo $getarray[$i-1]. "<br>";
}
//
$myArray = array("item1", "item2", "item3");
$_SESSION["myArray"] = $myArray;
print_r($_SESSION["myArray"]);

//
$arr = array("a" => 1, "b" => 2, "c" => 3);


foreach ($arr as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
session_destroy();
?>


