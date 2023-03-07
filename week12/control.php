<?php
header("Content-Type: application/json");
require_once("class.db.php");
$user = new Database();

$api = $_SERVER['REQUEST_METHOD'];

if ($api == "GET") {
    echo json_encode($user->show());
}
else{
    echo"error";

    http_response_code(405);
}
