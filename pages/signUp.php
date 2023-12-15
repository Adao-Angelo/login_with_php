<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link rel="stylesheet" href="../style/pages/signIn.css" />
    <style>
    .img{
      width: 40rem;
      margin:5rem;
      position: relative;
    }
  </style>
  </head>
  <body>
    <main class="container">
    <img class="img" src="../style/img/c.png" alt="">
      <div class="content">
        <h2>Create Account</h2>
        <div class="center">
          <div class="OT">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-apple"></i></a>
          </div>
          <p class="or">Or</p>
          <div class="form">
            <form action="../php/saveSignUp.php"  method = "POST">
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Full Name"
              />
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
                
                <button class="go borderR" name="submit" type = "submit"> <span class="span"></span> Create Account</button>
              </div>
              
            </form>
            <p>
              Already has account?
              <a href="./signIn.php"  class="signInLink"> Sign in </a>
            </p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
