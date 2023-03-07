
<?php
include_once('db.php');
$data = new database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = $data->add(
        $_POST['vocap'],
        $_POST['selection'],
        $_POST['mean']
    );
    echo json_encode($response);
} 
 else {
    echo "error";
}
$response = $data->show();
echo json_encode($response);
?>

