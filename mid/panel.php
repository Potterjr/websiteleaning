<?php
include_once 'class.data.php';
error_reporting(0);

if ($_SESSION["status"]=='admin' && $_SESSION["loggedin"]==true) {
    echo "<h1>Menupage</h1>";
    echo "session id :" . $_SESSION["id"] . "<br>";
    echo "session status :" . $_SESSION["status"] . "<br>";
    echo "session statuslogin :" . $_SESSION["loggedin"] . "<br>";


}
else{
    echo "please login again";
    header( "refresh:1;url=exit.php" );
}

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
<table border="1">



<?php
echo "<tr>";
$title = ["id", "password", "status"];
foreach ($title as $txt) {
  echo '<td>' . $txt . '</td>';
}
echo "</tr>";
$data = new data();
$show = $data->datatable();
foreach ($show as $row) {//------>>>>>>
  echo "<tr>";
  foreach ($row as $col) {
    echo '<td>' . $col . '</td>';
//
//
  }
  echo "</tr>";
}

?>
</table>
</body>
</html>

