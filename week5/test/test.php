<?php
$user="root";
$pass="";
try {
    
    $db = new PDO('mysql:host=localhost;dbname=sec2', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    foreach($db->query('SELECT * from user') as $row) {
        print_r($row);
    }
    echo "<table   border: 1px solid;>";
    echo "<tr><th>ID</th>
    <th>pesonalid</th>
    <th>Username</th>
    <th>password</th></tr>";
    foreach($db->query('SELECT * from user') as $row) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['pesonalid'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
  
    echo "</tr>";
    }
echo "</table>";
  
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$insert=[
    "command"=> "INSERT INTO `user`(`pesonalid`, `username`, `password`) VALUES ('123','asd','wdw')"
 ];

 $update=[
    "command"=> "UPDATE `user` SET `pesonalid`='111',`username`='weweas',`password`='asfa' WHERE `id`='2';"
 ];
$delete=[
    "command"=> "DELETE FROM `user` WHERE `id`='555';"
];

 $res=$db->exec($update["command"]);
 echo $res;
?>