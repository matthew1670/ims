<?php
require '../php/functions.php';
//Check if can connect to server
    if (! $conn = connect()){
        header("HTTP/1.0 503 service unavailable");
        exit();
    }
//Check if Request is correct type
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("HTTP/1.0 400 Bad Request");
            exit();
    }
$Fname = $_POST["FirstName"];
$Lname = $_POST["LastName"];
$Email = $_POST["Email"];
$password = $_POST["Password"];
$password = md5($password);
$username = substr($Fname, 1) . $Lname;

$Values = array('First Name' => $Fname,
                'Last Name' => $Lname,
                'Email' => $Email,
                'Password' => $password
            );
$error = FALSE;
foreach ($Values as $variable => $value) {
    if (!isset($variable) or empty($value)){
        echo "$variable";
        $missing[] = "$variable";
        $error = TRUE;
    }
}

$sql = "SELECT * FROM users WHERE Email = :Email";
$sth = $conn->prepare($sql);
$sth->bindParam(':Email', $Email);
$stmt->execute();
if ($sth->rowCount() >= 1){
    header("HTTP/1.0 409 Conflict");
    exit();
}

if ($error){
    $errorMsg = array('Errors' => $missing);
    header("HTTP/1.0 400 Bad Request");
    header("Content-type: application/json");
    echo json_encode($errorMsg);
    exit();
}
else{
    $sql = "INSERT INTO users (`FirstName` , `LastName`, `Email`, `Password`)
        VALUES (:Fname, :Lname, :Email, :Username, :Password)";
    $params = array(':Fname' => "$Fname",
                    ':Lname' => "$Lname",
                    ':Email' => "$Email",
                    ':Password' => "$password"
                    );
    $sth = $conn->prepare($sql);
    $sth->execute($params);
}
    ?>
