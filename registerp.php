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
        $password1 =$_POST['pwd1'];
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $email =$_POST['email'];


    if ($password==$password1){
  $query = "INSERT INTO users VALUES(NULL,'$username', '$firstname','$lastname','$email', '$password' )"; 
  $result=mysqli_query($conn, $query)or die("die"); 
  $result1 = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");}

     
        if(mysqli_num_rows($result1)>0){
            $_SESSION['error'] = "noterror";
            header("Location: login.php");
        }else {
            $_SESSION['error'] = "error";
        header("Location: register.php");
        }
        mysqli_close($conn);
    }
?>