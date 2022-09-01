<?php
session_start();
$servername='localhost';
    $user='root';
    $pass='';
    $conn=mysqli_connect($servername,$user,$pass,'aihack');
unset($_SESSION["username"]);
unset($_SESSION["login"]);
header("Location: login.php");
?>