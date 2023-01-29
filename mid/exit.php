<?php
session_start();
session_destroy();
?>
<?php
header( "refresh:1;url=main.php" );
?>