<?php
session_start();
unset($_SESSION['admin']);
session_destroy();
$_SESSION['message']="You are now logged out";
header("location:login.php");
?>