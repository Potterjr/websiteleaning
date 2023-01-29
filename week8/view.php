<!doctype html>
<?php
include_once 'class.met.php';
include_once 'control.php'
?>
<html lang="en">

<head>
  <title>Title</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <table border="1">

    <?php
    echo "<tr>";
    $title = ["รหัสหนังสือ", "ชื่อหนังสือ", "ประเภทหนังสือ", "ราคา", "จำนวน", "วันที่", "edit", "delete"];
    foreach ($title as $txt) {
      echo '<td>' . $txt . '</td>';
    }
    echo "</tr>";
    $bookdata = new book();
    $show = $bookdata->selectallrow();
    foreach ($show as $text) {
      echo "<tr>";
      foreach ($text as $col) {
        echo '<td>' . $col . '</td>';
      }
      echo '<td>' .
       "<a href='view.php?updateid=" . $text["ISBN"] . "'>edit</a>" . '</td>';
      echo '<td>' . 
      "<a href='control.php?id=" . $text["ISBN"] . "'>deldete</a>" . '</td>';
      echo "</tr>";
    }

    ?>
  </table>
  <div>
  <?php 
    if (isset($_GET["updateid"])) {
    print_r($book_item["ISBN"]);
      ?>
      <form action="control.php" method="post">
      <input type="hidden" name="updateid" value="<?php echo $_GET['updateid'] ?>">


        <h3>รหัสหนังสิอ</h3>
        <input type="text" name="ISBN" placeholder="รหัสหนังสือ" required value="<?=$book_item["ISBN"] ?>">
        <h3>ชือหนังสือ</h3>
        <input type="text" name="name" placeholder="ชือหนังสือ" required value="<?=$book_item["name"] ?>">
        <h3>ประเภทหนังสือ</h3>
        <select name="type">
          <?php
          $option = ["วิทยาศาสตร์", "บันเทิง", "วิชาการ", "กีฬา"];
          foreach ($option as $opt) {
            echo"<option value ='{$opt}'".($opt==$book_item["type"]?"selected":"" ).">{$opt}</option>";
          }?>
        </select>
        <h3>ราคา</h3>
        <input type="text" name="price" placeholder="ราคา" required value="<?=$book_item["price"] ?>">
        <h3>จำนวน</h3>
        <input type="text" name="qty" placeholder="จำนวน" required value="<?=$book_item["qty"] ?>">
        <br><br>
        <button type="submit" name="editbook">edit book</button>

      </form>
  </div>
<?php } 
else {
?>

<br>
<div>
  <form action="control.php" method="post">
    <h3>รหัสหนังสิอ</h3>
    <input type="text" name="ISBN" placeholder="รหัสหนังสือ" required>
    <h3>ชือหนังสือ</h3>
    <input type="text" name="name" placeholder="ชือหนังสือ" required>
    <h3>ประเภทหนังสือ</h3>
    <select name="type">
      <?php
      $option = ["วิทยาศาสตร์", "บันเทิง", "วิชาการ", "กีฬา"];
      foreach ($option as $opt) {
      ?>
        <option value="<?php echo $opt; ?>"><?= $opt; ?></option>
      <?php } ?>
    </select>
    <h3>ราคา</h3>
    <input type="text" name="price" placeholder="ราคา" required>
    <h3>จำนวน</h3>
    <input type="text" name="qty" placeholder="จำนวน" required>
    <br><br>
    <button type="submit" name="save">add book</button>
  </form>
</div>
<?php } ?>
</body>

</html>