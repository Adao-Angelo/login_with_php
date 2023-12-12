<?php
//print_r($_REQUEST);
session_start();
if (isset($_POST["submit"])) 
{
    include_once('connection.php');
    $name = $_POST["name"];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($connection , "INSERT INTO users(name , email , password) VALUES ('$name', '$email' , '$password')");
    header("Location: ../pages/signIn.php"); 
}

?>