<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("HTTP/1.0 400 Bad Request");
        exit();
}
require '../php/functions.php';

$user = $_POST["username"];
$pass = $_POST["password"];

//$pass = md5($pass);

if (! $conn = connect()){
    header("HTTP/1.0 503 service unavailable");
    exit();
}

$sql = "SELECT * FROM users WHERE username = :user AND password = :pass";
$params = array(':user' => $user,
                ':user' => $pass,);
$sth = $conn->prepare($sql);
$sth->execute($params);

if ($sth->rowCount() !== 1){
    header("HTTP/1.0 401 unauthorized");
    exit();
}
else{
    header("HTTP/1.0 202 accepted");
    setcookie"LoggedIn", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
}
 ?>
