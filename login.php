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
echo 'alert("Error");';  
echo '</script>';
$_SESSION['error'] = "";

}}
if (isset($_SESSION['error']))
{if ($_SESSION['error']=='noterror')
    {
    echo '<script type ="text/JavaScript">;';  
echo 'alert("Account created");';  
echo '</script>';
$_SESSION['error'] = "";

}}
if (isset($_SESSION['login'])) {
  if ($_SESSION['login'] == 'true') {
    header("Location: home.php");
  }
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- importer le fichier de style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Login </title>
  </head>
  <body>
    <navbar>
  <img src="imgs/logo.svg" alt="" class="imga">
</navbar>
   
  <div class="login_container">
            <div class="login_box">
                <h2>login</h2>
                <form action="loginp.php" method="POST">
                    <div class="user_box">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="user_box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    
                    <a href="#"><input type="submit" name="submit" value="login"/></a>
                    <a href="register.php" class="href">Register</a>
                </form>
            </div>
        </div>  
  </body>
</html>