<?php
    session_start();
    if(isset($_SESSION["id"])){
        echo"<h1>Menupage</h1>";
   echo"session id :". $_SESSION["id"]."<br>";
   echo "session password :". $_SESSION["password"]."<br>"; 
?>
<a href="logout.php">logout</a>
<?php
    }else{
        ?>
        <script>
        document.location.href="login.html";
    </script>
<?php
}
?>
