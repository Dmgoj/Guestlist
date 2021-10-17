 
<?php
session_start();
//require("init.php");
include 'autoloader.php';
//unset($_SESSION['user']);
session_destroy();
header("Location:login.php");


?>

