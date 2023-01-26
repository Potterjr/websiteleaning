<?php
    session_start();
    if(isset($_SESSION["id"])){
        echo"<h1>[page1]</h1>";
?>
<a href="menu.php">menu</a>
<a href="logout.php">logout</a>
<?php
    }else{
        ?>
        <script>
        document.location.href="login.php";
    </script>
<?php
}
?>
