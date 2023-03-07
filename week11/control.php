<?php
require_once('db.php');

    $db= new database();
    
    if($_SERVER['REQUEST_METHOD']=="GET"){
        echo json_encode($db->selectallrow());
    }
    else{
        http_response_code(405);
    } 
?>