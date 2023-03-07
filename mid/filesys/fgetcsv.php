<table border="2">
  <tr>
    <?php
    $file = fopen("test.csv", "r");
    $header = fgetcsv($file);
    foreach ($header as $col) {
      echo "<th>$col</th>";
    }
    ?>
  </tr>
  <?php
  while ($row = fgetcsv($file)) {
    echo "<tr>";
    foreach ($row as $col) {
      echo "<td>$col</td>";
    }
    echo "</tr>";
  
  }
  
  fclose($file);
  ?>
</table>

<?php

  /*
id|name|email
1 | a  |a@ssasd
2 | b  |b@asdas
3 | c  |ccc@asdas

*/
  $file = fopen("test.csv", "r");
  $header = fgetcsv($file);
  $row = fgetcsv($file);
  $row1 = fgetcsv($file);
  $row2 = fgetcsv($file);
echo $header[0]."<br>"; //id
echo $header[1]."<br>"; //name
echo $header[2]."<br>"; //email
echo "-----------------<br>";
echo $row[0]."<br>";    // 1
echo $row[1]."<br>";    // a
echo $row[2]."<br>";    // a@ssasd
echo "-----------------<br>";
echo $row1[0]."<br>";   //2
echo $row1[1]."<br>";   //b
echo $row1[2]."<br>";   //c@asdas
echo "-----------------<br>";
echo $row2[0]."<br>";   //3
echo $row2[1]."<br>";   //c
echo $row2[2]."<br>";   //ccc@asdas

?>

<?php
$file = fopen("file.csv","w");
$data = array("Column 1","Column 2","Column 3");

fputcsv($file, $data);
fclose($file);
?>

<?php
$file = fopen("file.csv","a");
$data1 = array("Row 1 Column 1","Row 1 Column 2","Row 1 Column 3");
fputcsv($file, $data1);
$data2 = array("Row 2 Column 1","Row 2 Column 2","Row 2 Column 3");
fputcsv($file, $data2);
fclose($file);
?>
<!-- 
"r" - อ่านอย่างเดียว เริ่มต้นที่จุดเริ่มต้นของไฟล์
"r+" - อ่าน/เขียน เริ่มต้นที่จุดเริ่มต้นของไฟล์
"w" - เขียนเท่านั้น เปิดและตัดทอนไฟล์ หรือสร้างไฟล์ใหม่หากไม่มีอยู่ วางตัวชี้ไฟล์ที่จุดเริ่มต้นของไฟล์
"w+" - อ่าน/เขียน เปิดและตัดทอนไฟล์ หรือสร้างไฟล์ใหม่หากไม่มีอยู่ วางตัวชี้ไฟล์ที่จุดเริ่มต้นของไฟล์
"a" - เขียนเท่านั้น เปิดและเขียนต่อท้ายไฟล์หรือสร้างไฟล์ใหม่หากไม่มีอยู่
"a+" - อ่าน/เขียน รักษาเนื้อหาไฟล์โดยการเขียนต่อท้ายไฟล์
"x" - เขียนเท่านั้น สร้างไฟล์ใหม่ คืนค่า FALSE และแสดงข้อผิดพลาดหากไฟล์มีอยู่แล้ว
"x+" - อ่าน/เขียน สร้างไฟล์ใหม่ คืนค่า FALSE และแสดงข้อผิดพลาดหากไฟล์มีอยู่แล้ว
"c" - เขียนเท่านั้น เปิดไฟล์ หรือสร้างไฟล์ใหม่หากไม่มีอยู่ วางตัวชี้ไฟล์ที่จุดเริ่มต้นของไฟล์
"c+" - อ่าน/เขียน เปิดไฟล์ หรือสร้างไฟล์ใหม่หากไม่มีอยู่ วางตัวชี้ไฟล์ที่จุดเริ่มต้นของไฟล์
"e" - มีเฉพาะใน PHP ที่คอมไพล์บน POSIX.1-2008 ตามระบบ    
-!>
