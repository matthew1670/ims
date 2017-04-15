<?php
/*
API NAME = ADD TO DB
API FUNCTION = this api functions to add a new asset to the assets table
checking the following:
> Request is POST request
> No blank variables
> if success sql insert or failed
Finally retuning the correct HTTP Status code.
*/
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("HTTP/1.0 400 Bad Request");
        exit();
}
require '../php/functions.php';
$AssetNo = $_POST["Assetno"];
$AssetType = $_POST["assettype"];
$AssetMake = $_POST["Make"];
$AssetModel = $_POST["Model"];
$AssetLocation = $_POST["Location"];
$AssetPatTest = $_POST["PatTest"];
$AssetUser = $_POST["User"];

$Values = array('Number' => $AssetNo,
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
else{
//CREATE CONNECTION TO DB
    $conn = connect();
//SET PARAMS FOR THE PREPARED STATEMENT
    $Params = array(
                ":assetnumber" => $AssetNo,
                ":type" => $AssetType,
                ":make" => $AssetMake,
                ":model" => $AssetModel,
                ":user" => $AssetUser,
                ":location" =>$AssetLocation,
                ":pat" => $AssetPatTest
            );
//PREPERED SQL STATEMENT
    $sql="INSERT INTO `assets` (assetNo, type, make, model, associatedTo, Location, patTestDate)
    VALUES (:assetnumber, :type, :make, :model, :user, :location, :pat)";
//PREPERING THE SQL STATEMENT
    $sth = $conn->prepare($sql);
//EXECTING THE SQL STATMENT AND RETURNING AN APPROPRIATE HTTP STATUS CODE.
    if ($sth->execute($Params)){
        header("HTTP/1.0 201 Created");
    }
    else{
        header("HTTP/1.0  500 Internal Server Error");
    }
}

?>
