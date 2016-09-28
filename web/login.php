<?php
    $title = "SU Math/CS Club Log in";
    include("includes/header.html");
    include("includes/sidenav.html");
    include("includes/Dashboard.html");
?>

<head>
    <title>Math CS Club - Login</title>
</head>

<body class="login-background">
<div class="container">

</div>
<div class="form">
  <br>
   <div class="loginWords">Math CS Club<br>Login</div>
   <br><br>
  <form class="forgot-form">
    <p class="message">Forgot your password?</p><br>
    <input type="password" placeholder="password"/>
    <input type="text" placeholder="email address"/>
    <button>submit</button>
    <p class="message">Already registered? <a href="#login.php">Sign In</a></p>
    <p class="message">Not registered? <a href="#sign-up.php">Create an account</a></p> <!-- needs link to create account -->
  </form>

  <form method="post" action="home" name="login-form">
    <input id="login_input_email" name="user_email" type="text" placeholder="email" required>
    <input id="login_input_password" name="user_password" type="password" placeholder="password" required />
    <input id="login_input_submit" type="submit" name="login" value="Log in" />
    <p class="message">Forgot your password? <a href="#">Get password</a></p>
    <p class="message">Not registered? <a href="sign-up.php">Create an account</a></p> <!-- needs link to create account -->
  </form>

  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>
</html>
