<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="icon" type="image/x-icon" href="/img/fame.jpg">
  <title>Fame</title>
</head>
<body>
  <div class="container">
    <div class="sub logo"></div>
    <div class="sub navigator-bar">
        <div class="menu-bar">
          <ul id="menu-list">
             <li><a href="index.html">HOME</a></li>
             <li><a href="login.html">DISTRIBUTION</a></li>
             <li><a href="contact.html">CONTACT</a></li>
             <li><a href="services.html">SERVICE</a></li>
          </ul>
        </div>
        <div class="menu-register-login">
          <ul>
              <li><a href="register.html">Register</a></li>
          </ul>
        </div>
        <div class="menu-open">
          <img id="open-icon" src="img/menu-open.png" alt="">
          <img id="close-icon" src="img/menu-close.png" alt="">
        </div>

    </div>

    

     <div  class=" sub main " >
        
        
        <div class="formclass">
          <div class="reghead">
            <h1>LOGIN</h1>
            <p>Sign in to your account if you are already a member</p>
          </div>
          
          <form action="main.php" method="post">
            <input type="text" placeholder="Enter your email" name="email">
            <input type="password" placeholder="Enter your password" name="password">
              <div id="passreset">
                <a href="passwordreset.html">Forget password?</a>
              </div>
            <div class="signup">
              <input id="submit" type="submit" value="Login" name="login"> <br>
              
               <span>New to here? <a href="register.html"> JOIN NOW! </a></span>

            </div>
            
         </form>

        </div>
       
      </div>
    
      


    
    <div class="sub footer">
      <div class="footer-email">
        <h2>BE THE FIRST TO KNOW WHATS NEW</h2>
        <p>Enter your email below to get  the lastest  update on our product and services</p>
        <input type="text" placeholder="ENTER YOUR EMAIL"> <button>SEND</button>
      </div>
      <div class="footer-copyright">
        <div class="footer-navigator">
            <ul>
              <li><a href="">HOME</a></li>
              <li><a href="">TERMS AND CONDITIONS</a></li>
              <li><a href="">FAQ</a></li>
              <li><a href="">CONTACT</a></li>
            </ul>
        </div>
        <div class="footer-fame">
          <p>Copyright 2024 Fine arts music empire</p>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
