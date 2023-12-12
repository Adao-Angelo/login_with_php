
<?php
    session_start();
   
    if ((!isset($_SESSION['email'])== true)&&(!isset($_SESSION["password"])== true)) {
        header("Location: signIn.php");
        unset($_SESSION['email']);
        unset( $_SESSION['password']);
    }
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home.css">
    <title>SITE | HOME</title>
</head>
<body  class = "container">
    <h2 class = "h2">Bem - Vindo A Pagian Inicial</h2>


    <div class="content">
       <ul>
        <menu class = "top">
            <div class="text">
                Home | Page 
                <i class = "fas fa-house-user"></i>
            </div>
           
            <div class="btn_logout">
                <a href="../php/logout.php">Logout</a>
            </div>
        </menu>
       </ul>
       <h1 >Yous Net</h1>
       <div class = "redes">
          <a href="">
            <i  class = "fab fa-whatsapp">

            </i>
                whatsapp
          </a>
          <a href="">
            <i class = "fab fa-facebook-f"></i>
                facebook
          </a>

          <a href="" >
               <i class = "fab fa-instagram"></i> Instagram
          </a>
          <a href="">
               <i class = "fab fa-youtube-square"></i>  youtube
          </a>
          <a href="">
            <i class = "fab fa-tiktok"></i>    tiktok
          </a>
          <a href="" >
               <i class = "fab fa-telegram"></i> Telegram
          </a>


        

          </div>

          <div class = "user">
            <i class = "fas fa-user">
            </i>
            <p> <?php
                print_r($email)
            ?></p>

          </div>
      
    </div>
</body>
</html>