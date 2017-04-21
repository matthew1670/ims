<?php
require '../php/functions.php';
//Check if can connect to server
if (! $conn = connect()){
    header("HTTP/1.0 503 service unavailable");
    exit();
}
//Check if Request is correct type
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST["id"]) || empty($_POST["id"]) || ! $id = $_POST["id"]) {
        header("HTTP/1.0 400 Bad Request");
        exit();
}
$sql = "DELETE FROM assets WHERE id = :id";
$sth = $conn->prepare($sql);
$sth->bindParam(":id", $id);
if ($sth->execute()){
    header("HTTP/1.0 200 Ok");
}
else{
    header("HTTP/1.0  500 Internal Server Error");
}
?>
