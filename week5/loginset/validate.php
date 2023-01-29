<?php
include("conn.php");
$id=$_POST['id'];
$password=$_POST['password'];

if (isset($_POST['submit'])) {
try{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $stmt = $pdo->prepare("SELECT id FROM reglog WHERE id = :id AND password = :password");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Logged in successfully. Welcome user id: " . $row["id"]."<br>";
        session_start();
        $_SESSION["id"] = $id;
        $_SESSION["password"] = $password;
        echo"go to menu";
        echo" <a href='menu.php'>menu</a>";
    } else {
        echo "Incorrect username or password";
        echo" <a href='login.html'>login</a>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$pdo = null;
}

?>
