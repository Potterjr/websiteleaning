<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="control.php" method="post">

        <label>id:</label>
        <input type="text" name="id" >
        <label>password:</label>
        <input type="text" name="password">
        <label>status</label>
        <select name="status">
            <?php
            $status = ["admin", "user"];
            foreach ($status as $stu) {
            ?>
                <option value="<?php echo $stu; ?>"><?= $stu; ?></option>
             <?php } ?>
        </select>
     <button type="submit" name="register"> adddata
     </button>
    </form>
</body>

</html>