
<!doctype html>
<html lang="en">
  <head>
    <?php include 'header.php'; ?>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="mysql.php" method="POST">

      <a href="index.php"><img class="mb-4" src="img/logo.png" alt="" width="72" height="72"></a>
      <h1 class="h3 mb-3">Signin to Notes</h1>
      
  <?php
  if(!empty($_GET['error'])){
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "<div class='fa fa-times-circle'></div>&nbsp;&nbsp;";
    $error = $_GET['error'];
      if($error=="INVALID_CREDENTIALS"){
        echo "The credentials you have entered are incorrect.";
      }else if($error=="NOT_LOGGED_IN"){
        echo "You need to login first.";
      }else if($error=="LOGOUT"){
        echo "You have logged out.";
      }else{
        echo $error." .";
      }
    
    echo "</div>";
  }
  ?>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" maxlength="32" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input maxlength="32" type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Choose to login securely</label>
</div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit"><div class="fa fa-sign-in-alt"></div> &nbsp; Sign in</button>
      <a href="forgot-password.php" type="">Forgot password</a> &nbsp; &bullet; &nbsp;
      <a class="" href="signup.php">New Account</a>
    </form>
  </body>
</html>
