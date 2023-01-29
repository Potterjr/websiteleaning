
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=savetext", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $timestamp = date('Y-m-d H:i:s');
        $stmt = $pdo->prepare("INSERT INTO text (name, message, timestamp) VALUES (:name, :message, :timestamp)");
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':message', $message);
        $stmt->bindValue(':timestamp', $timestamp);
        $stmt->execute();
        echo "New message recorded successfully";
    }

    $stmt = $pdo->prepare("SELECT id,name, message, timestamp FROM text");
    $stmt->execute();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Messages</title>
</head>
<body>
    <form method="post" action="main.php">
        Name: <input type="text" name="name"><br>
        Message: <textarea name="message"></textarea><br>
        <input type="submit" name="submit" value="Submit"><br>
        <input type="reset" value="reset">
    </form>
    <div class="container">
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="card">
                <div class="card-header">
                <h5 class="card-title"><?= $row['id'] ?></h5>
                    <h5 class="card-title"><?= $row['name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $row['timestamp'] ?></h6>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $row['message'] ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
<style>
    form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="reset"] {
        width: 100%;
        background-color: red;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

</style>
