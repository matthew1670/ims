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

$AssetID = $_POST["ID"];
$AssetNo = $_POST["Assetno"];
$AssetType = $_POST["assettype"];
$AssetMake = $_POST["Make"];
$AssetMake = $_POST["Make"];
$AssetModel = $_POST["Model"];
$AssetLocation = $_POST["Location"];
$AssetPatTest = $_POST["PatTest"];
$AssetUser = $_POST["User"];

$Values = array('ID' => $AssetID,
                'Number' => $AssetNo,
                'Type' => $AssetType,
                'Make' => $AssetMake,
                'Model' => $AssetModel,
                'Location' => $AssetLocation,
                'Pat Test Date' => $AssetPatTest,
                'Associated User' => $AssetUser);

//ERRORS BOOLEN DEFAULT TO FALSE
$error = false;
//CHECK IF ANY POSTED VARIABLES ARE BLANK FROM THE VALUES ARRAY
foreach ($Values as $variable => $value) {
    if (!isset($variable) or empty($value)){
        echo "$variable";
        $missing[] = "$variable";
        $error = true;
    }
}

//IF ANY ERRORS IN PRE SQL CHECKS
//RETURN 400 BAD REQUEST
//RETURN Json CONTAINING errors.
if ($error){
    $errorMsg = array('Errors' => $missing);
    header("HTTP/1.0 400 Bad Request");
    header("Content-type: application/json");
    echo json_encode($errorMsg);
    exit();
}
else {
    $Params = array(
                ":assetid" => $AssetID,
                ":assetnumber" => $AssetNo,
                ":type" => $AssetType,
                ":make" => $AssetMake,
                ":model" => $AssetModel,
                ":user" => $AssetUser,
                ":location" =>$AssetLocation,
                ":pat" => $AssetPatTest
            );
    $sql = "UPDATE assets SET assetNo = :assetnumber, type = :type, make = :make, model = :model, associatedTo = :user, Location = :location, patTestDate =:pat WHERE id = :assetid";
    //PREPERING THE SQL STATEMENT
        $sth = $conn->prepare($sql);
    //EXECTING THE SQL STATMENT AND RETURNING AN APPROPRIATE HTTP STATUS CODE.
        if ($sth->execute($Params)){
            header("HTTP/1.0 202 Accepted");
        }
        else{
            header("HTTP/1.0  500 Internal Server Error");
        }
}

?>
