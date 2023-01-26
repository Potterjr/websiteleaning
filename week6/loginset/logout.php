<?php
session_start();
session_destroy();
echo "5 second";
header("Refresh: 5; url=login.html");
?>
