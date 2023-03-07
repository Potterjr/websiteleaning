<form action="test.php" method="post"  enctype="multipart/form-data">
  <select name="options">
    <option value="select1">select 1</option>
    <option value="select2">select 2</option>
    <option value="select3">select 3</option>
  </select>
  <br> <br> <br>

  <input type="radio" name="radio_option" value="option1"> Option 1<br>
  <input type="radio" name="radio_option" value="option2"> Option 2<br>
  <input type="radio" name="radio_option" value="option3"> Option 3<br>
  <br> <br> <br>
  <input type="checkbox" name="hobby[]" value="checkbox1">  checkbox1 &nbsp
<input type="checkbox" name="hobby[]" value="checkbox2">  checkbox2 &nbsp
<input type="checkbox" name="hobby[]" value="checkbox3 ">  checkbox3 <br>
<br> <br> <br>
<input type="file" name="file_upload">
<br> <br> <br>
  <input type="submit" value="Submit">
  <br> <br> <br>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $selected_option = $_POST["options"];
  $radio_option = $_POST["radio_option"];
  echo "You selected: ".$selected_option;
    echo "<br>";
    echo "You radio: ".$radio_option;
    echo "<br>";
    $hobby = $_POST['hobby'];
    foreach ($hobby as $hobys=>$value) {
              echo "Hobby : ".$value."<br />";
    }
    if(isset($_FILES['file_upload'])){
        $file = $_FILES['file_upload'];
      
        // File properties
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
      
        // Work with the uploaded file
        if($file_error === 0){
          $file_destination = ' '.$file_name;
          move_uploaded_file($file_tmp, $file_destination);//file_destination path save
          echo "File uploaded successfully: ".$file_name."<br>";
      
          // Read the file
          $file_content = file_get_contents($file_destination);
          echo "File content:<br>";
          echo nl2br($file_content);
        }
      }

}

?>
<pre>
<input type="button">
<input type="checkbox">
<input type="color">
<input type="date">
<input type="datetime-local">
<input type="email">
<input type="file">
<input type="hidden">
<input type="image">
<input type="month">
<input type="number">
<input type="password">
<input type="radio">
<input type="range">
<input type="reset">
<input type="search">
<input type="submit">
<input type="tel">
<input type="text">
<input type="url">
<input type="time">
<input type="week">


