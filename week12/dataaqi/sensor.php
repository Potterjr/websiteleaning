<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $response = $data->add(
        $_POST['selection'],
        $_POST['pm']
    );
    echo json_encode($response);
}
else{
    echo"error";
}

?>