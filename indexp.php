<?php
session_start();
ob_start();
if (isset($_POST['submit'])) {
    $servername='localhost';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'aihack');
    

        $name =$_POST['companyname'];
        $field =$_POST['field'];
        $budget =$_POST['budget'];
     

  
  $query = "INSERT INTO companies VALUES(NULL,'$field', '$name','$budget')"; 
  $result=mysqli_query($conn, $query)or die("die"); 
  $result1 = mysqli_query($conn,"SELECT * FROM companies WHERE name = '$name'");
 
        if(mysqli_num_rows($result1)>0){
            $command = escapeshellcmd("python pythonFile.py $field $budget"); 
            $output =shell_exec($command);
            echo $output;
            $_SESSION['submited'] = "yes";
            header("Location: index.php");
            $_SESSION['output'] = $output;
         
        }else {
            $_SESSION['submited'] = "no";
        header("Location: index.php");
        }
     

        mysqli_close($conn);
    }

    
?>