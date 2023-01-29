<h3>welcome user</h3>
<?php
session_start();
error_reporting(0);

if ($_SESSION["status"]=='user' && $_SESSION["loggedin"]==true) {
    echo "<h1>Menupage</h1>";
    echo "session id :" . $_SESSION["id"] . "<br>";
    echo "session status :" . $_SESSION["status"] . "<br>";
    echo "session statuslogin :" . $_SESSION["loggedin"] . "<br>";

    echo " <button><a href='exit.php'>exit</a></button>";
}
else{
    echo "please login again";
    header( "refresh:1;url=exit.php" );
}
?>
