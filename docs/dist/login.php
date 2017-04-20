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
            <body data-spy="scroll" data-target="#SideNavigation" data-offset="50" id="LoginPage">
                <div class="container-fluid">
                    <div class="loginbox row justify-content-center align-items-center">
                        <form class="loginform" action="/php/login.php" method="post">
                            <div class="form-group">
                                <label for="Assetno">UserName</label>
                                <input type="text" name="Username" class="form-control" placeholder="Username/Email" required />
                            </div>
                            <div class="form-group">
                                <label for="Assetno">Password</label>
                                <input type="password" name="Password" class="form-control" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" value="login" class="form-control btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
        <?php footer();?>
    </body>
</html>
