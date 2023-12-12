<?php
//print_r($_REQUEST);
session_start();
if (isset($_POST["submit"])) 
{
    include_once('connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = $connection -> query($sql);
    if (mysqli_num_rows($result) < 1) {   
       unset($_SESSION['email'] ); 
       unset( $_SESSION['password']);
        header("Location: ../pages/signIn.php");
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: ../pages/home.php");
    }
}
else {
    header("Location: ../pages/signIn.php");
}


?>