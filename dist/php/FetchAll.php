<?php
header("Content-type: application/json");
require '../php/functions.php';
$conn=connect();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $sql = "SELECT * FROM assets";
    $sth = $conn->prepare($sql);
    $sth->execute();
    while ($result = $sth->fetchObject()) {
        $AllResults[] = $result;
    }
    echo json_encode($AllResults);
} catch (Exception $e) {
echo "Sorry there was an error";
}

?>
