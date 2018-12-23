
<?php
  session_start();
  $errorMsg = "";
  $validUser = "";
  if(isset($_POST["sub"])) {
    $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
    if(!$validUser) $errorMsg = "Invalid username or password.";
    else $_SESSION["login"] = true;
  }
  if($validUser) {
     header("Location: admin.php"); die();
  }
?>

<!DOCTYPE html>
  <html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Login</title>
  </head>

  <body style = "background-image: url('logo.png');text-align:center;padding-top:20%">


  <div>
    <form name="input" action="index.php" method="post">
      <label for="username" style="font-size:200%">Username:</label><input style="font-size:150%" type="text" placeholder = "admin username" id="username" name="username" />
      <br>
      <br>
      <label for="password" style="font-size:200%">Password:</label><input style="font-size:150%" type="password" placeholder = "password" id="		password" name="password" />
      <br>
      <br>
      <div class="error"><?= $errorMsg ?></div>
      <input style="font-size:150%" type="submit" value="Login" name="sub" />
    </form>
</div>




  </body>
  </html>