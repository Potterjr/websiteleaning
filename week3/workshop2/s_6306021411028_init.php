<?php
    session_start();// เปิด session
    ?>
    <?php

    $_SESSION["data"]=[49.99,9.9e2,74,9];
    
?>
<pre>
    <?php 
        print_r($_SESSION);
    ?>
</pre>
<a href="s_6306021411028_add_score.html">Add new</a><br>
<a href="s_6306021411028_display_score.php">go</a>