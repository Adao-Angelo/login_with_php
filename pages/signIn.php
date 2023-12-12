<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN IN</title>
    <link rel="stylesheet" href="../style/pages/signIn.css" />
  </head>
  <body>
    <main class="container">
      <div class="content">
        <h2>Login</h2>
        <div class="center">
          <div class="OT">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-apple"></i></a>
          </div>
          <p class="or">Or</p>
          <div class="form">
            <form action="../php/VLogin.php" method = "POST">
              <input
                type="text"
                name="email"
                id="email"
                placeholder="Email Address"
              />
              <input
                type="text"
                name="password"
                id="password"
                placeholder="password"
              />
              <div>
                
                <button class="go borderR" name="submit" type = "submit"> <span class="span"></span>Login</button>
              </div>
              
            </form>
            <p>
               I don`t have account 
              <a href="./signUp.php" class="signInLink"> Sign up </a>
            </p>
          </div>
        </div>
      </div>