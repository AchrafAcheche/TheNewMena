<?php
session_start();
$servername='localhost';
    $user='root';
    $pass='';
    $conn=mysqli_connect($servername,$user,$pass,'aihack');
    if (isset($_SESSION['error']))
{if ($_SESSION['error']=='error')
    {
    echo '<script type ="text/JavaScript">;';  
echo 'alert("Information Incorrecte");';  
echo '</script>';

}}
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 'true') {
      header("Location: home.php");
    }
  }
?>
<html>

<head>
<img src="imgs/logo.svg" alt="" class="imga">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style_sheet.css">
    <script language="javascript">
        function verif() {
            if (f.firstname.value == "" || f.firstname.length < 3) {
                alert("le nom est obligatoire"); return false;
            }
            if (f.lastname.value == "" || f.lastname.length < 3) {
                alert("le prénom est obligatoire"); return false;
            }
            if (f.username.length < 5 || f.username.length > 12) {
                alert("username long doit etre entre 5 et 12 characters");
                return false;
            }
            if (f.email.indexOf('@') == -1 || f.email.indexOf('.') == -1 || f.email.length < 10) {
                alert("verifier votre email"); return false;

            }
            }
            if (f.password.value = "" || f.passwored.length < 8) {
                alert("nombre du caractères du mot de pass doit etre sup a 8 caracteres ");
                return false;
            }
            if (f.pwdt.value != f.password.value) { 
                alert("les 2 mot de passe ne sont pas identiques"); 
                return false
            }
            return true;
       
    </script>
    <title> Register </title>

</head>

<body>
 
<div class="login_container">
            <div class="login_box">
                <h2>register</h2>
                <form action="registerp.php" method="POST">
                <div class="user_box">
                        <input type="text" name="firstname" required>
                        <label>Firstname</label>
                    </div>
                    <div class="user_box">
                        <input type="text" name="lastname" required>
                        <label>Lastname</label>
                    </div>
                    <div class="user_box">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="user_box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="user_box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="user_box">
                        <input type="password" name="pwd1" required>
                        <label>Password Confirmation</label>
                    </div>
                    
                    <a href="#"><input type="submit" name="submit" value="register"/></a>
                    <a href="login.php" class="href">Login</a>
                </form>
            </div>
        </div>  
        <a href="">                        aa</a>

   
</body>

</html>