<?php
require '../php/functions.php';
setcookie("logged_In", "", time() - 3600, "/");
header('Location: /login.php');
?>
