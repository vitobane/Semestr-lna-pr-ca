<?php include("init.php"); ?>
<?php
echo 'logout';
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
header("location:index.php");
?>