<?php

try {

    $pdo  = new PDO('mysql:host=localhost;dbname=reg', "root", "");
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>