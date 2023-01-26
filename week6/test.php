<?php
$user="root";
$pass="";
try {
    
    $db = new PDO('mysql:host=localhost;dbname=sec2', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    foreach($db->query('SELECT * from user') as $row) {
        print_r($row);
    }
  
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