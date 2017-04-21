<?php
require '/php/functions.php';
if(Login_Check()){
    header("Location: /index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
            <body id="LoginPage">
                <div class="container-fluid">
                    <div class="loginbox row justify-content-center align-items-center">
                        <form id="loginform" class="loginform" action="/php/login.php" method="post">
                            <div class="logo">
                              <img src="/img/logo-Initials.png" class="img-fluid logo">
                              <p>Asset Managment System</p>
                            </div>
                            <div id="errorArea" class="alert alert-danger"></div>
                            <div class="form-group">
                                <label for="Assetno" class="sr-only">UserName</label>
                                <input type="text" name="username" class="form-control" placeholder="Username/Email" required="">
                            </div>
                            <div class="form-group">
                                <label for="Assetno" class="sr-only">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="login" class="form-control btn btn-primary">
                            </div>
                            <p>Dont have an account <a href="#">Register here</a></p>
                        </form>
                    </div>
                </div>
        <?php footer();?>
    </body>
</html>
