<?php
    session_start();
    $a = $_SESSION["data"];
?>
<pre>
    <?php
        if(isset($_POST["score"]))
        {
           $_SESSION["data"][]=$_POST["score"];
           echo"Add Score to data[] success<br>";
        }else{
        print_r($a);
        }
    ?>
</pre>
<a href="s_6306021411028_add_score.html">Add new</a><br>
<a href="s_6306021411028_display_score.php">go</a><br>
<a href="s_6306021411028_report_grade.php">report</a>

