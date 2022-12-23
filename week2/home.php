<?php

date_default_timezone_set("Asia/Bangkok");
echo "<div class=col '>" ;
$d1 = date("F j, Y, g:i a");
$d2=" วันที่ " . date("d") ." เดือน" .date("m")." ปี ค.ศ.".date("Y")."เวลา".date("h:i:sa"). "<br>";
$d3=date("m.d.Y") . "<br>";
$d4= date("d,m,Y") . "<br>";
$d5= date("Ymd") . "<br>";
$d6= date ("it is the jS day"). "<br>";
$d7= "It is the".date("jS"). "<br>";
$d8= date("h:i:sa"). "<br>"; 
$d9= date("Y-m-d").date("D").date("H:m:sT:00"). "<br>";
$d10= date("D,t,M,Y,H:m:sT:00"). "<br>";

echo "<p class='p1'>1." . $d1. "</p>";
echo "<p class='p2'>2." . $d2. "</p>";
echo "<p class='p3'>3. " . $d3. "</p>";
echo "<p class='p4'>4." . $d4. "</p>";
echo "<p class='p5'>5." . $d5. "</p>";
echo "<p class='p6'>6." . $d6. "</p>";
echo "<p class='p7'>7." . $d7. "</p>";
echo "<p class='p8'>8." . $d8. "</p>";
echo "<p class='p9'>9." . $d9. "</p>";
echo "<p class='p10'>10." . $d10. "</p>";
?>
<style>
p {
  font-size:80px;
  
}
p.p1{
    color:red;
}
p.p2{
    color:green;
    font-size:60px;
}
p.p3{
    color:blue;
    font-size:50px;
}
p.p4{
    color:White;
    font-size:40px;
    
}
p.p5{
    color:yellow;
    font-size:10px;
}
p.p6{
    color:orange;
    font-size:30px;
    text-transform:uppercase;
}
p.p7{
    color:gray;
    font-size:30px;
    text-decoration: underline;
}
p.p8{
    color:green;
    font-size:30px;
    font-family: Arial, Helvetica, sans-serif;
}
p.p9{
    color:purple;
    font-size:10px;
    font-size: 2.5em; /* 40px/16=2.5em */
}
p.p10{
    color:pink;
    font-size:100px;
}

</style>
