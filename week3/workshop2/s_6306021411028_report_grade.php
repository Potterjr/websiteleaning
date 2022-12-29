<?php session_start(); ?>

<?php
    function cal_grade($score)
    {

        if($score>=80){ $grade ="A";return $grade;}
        else if($score>=75){ $grade ="B+";return $grade;}
        else if($score>=70){ $grade ="B";return $grade;}
        else if($score>=65){ $grade ="C+";return $grade;}
        else if($score>=60){ $grade ="C";return $grade;}
        else if($score>=55){ $grade ="D+";return $grade;}
        else if($score>=50){ $grade ="D";return $grade;}
        else if($score<49){ $grade ="F";return $grade;}
        else{ $grade ="F";return $grade;}
 
    }
    
    $data = $_SESSION["data"];
?>
    <table border="1">
    <tr><th>ลำดับ</th><th style="width:50%">Score</th><th>Grade</th></tr>
<?php
    foreach($data as $key => $value)
    {
        echo "<tr>".
            "<th>".($key+1)."</th>".
            "<td>".$value."</td>".
            "<th>".cal_grade($value)."</th>".
            "</tr>";
    }
?>
</table>


