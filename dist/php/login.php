<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("HTTP/1.0 400 Bad Request");
        exit();
}
require '../php/functions.php';
$user = $_POST["username"];
$pass = $_POST["password"];
$pass = md5($pass);

if (! $conn = connect()){
    header("HTTP/1.0 503 service unavailable");
    exit();
}

$sql = "SELECT * FROM users WHERE Email = :user AND Password = :pass";
$params = array(':user' => $user,
                ':pass' => $pass
                );
$sth = $conn->prepare($sql);
$sth->execute($params);

if ($sth->rowCount() !== 1){
    header("HTTP/1.0 401 unauthorized");
    unset($_COOKIE["logged_In"]);
    exit();
}
else{
    setcookie("logged_In", "112", time() + (86400 * 1), "/");
    header("HTTP/1.0 202 accepted");
}
?>
