<?php
session_start();
ob_start();
if (isset($_POST['submit'])) {
    $servername='localhost';
    $user='root';
    $pass='';
    $conn=mysqli_connect($servername,$user,$pass,'aihack');
        $username =$_POST['username'];
        $password =$_POST['password'];
        $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' and passwd = '$password'");
        if(mysqli_num_rows($result)>0){
            $_SESSION['username'] = $username;
            $_SESSION['login'] = "true";
            $_SESSION['error'] = "";
            header("Location: index.php");
           
            
        }else {
            $_SESSION['error'] = "error";
            header("Location: login.php");
        }
        mysqli_close($conn);
    }
?>