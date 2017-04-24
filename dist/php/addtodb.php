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
$AssetMake = $_POST["Make"];
$AssetModel = $_POST["Model"];
$AssetLocation = $_POST["Location"];
$AssetPatTest = $_POST["PatTest"];
$AssetUser = $_POST["User"];

if ($_FILES["img"]){
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/img/Assets-images/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = true;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = true;
        } else {
            $uploadOk = false;
        }
        // if ($_FILES["img"]["size"] > 500000) {
        //     $uploadOk = false;
        // }
    // Check if $uploadOk is set to false by an error
    if ($uploadOk == false) {
        header("HTTP/1.0 400 Bad Request");
        exit();
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            header("HTTP/1.0 500 Internal Server Error");
            exit();
        }
    }
}


$Values = array('Number' => $AssetNo,
                'Type' => $AssetType,
                'Make' => $AssetMake,
                'Model' => $AssetModel,
                'Location' => $AssetLocation,
                'Pat Test Date' => $AssetPatTest,
                'Associated User' => $AssetUser);
//CREATE CONNECTION TO DB return service unavaliable if faile to connect.
if (! $conn = connect()){
    header("HTTP/1.0 503 service unavailable");
    exit();
}

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

//CHECK IF ASSET NUMBER ALREADY IN USE IN THE DB
$sql = "SELECT * FROM assets WHERE assetNo = :id";
$sth = $conn->prepare($sql);
$sth->bindParam(':id', $AssetNo);
$sth->execute();
//Count the results returned IF 1 or more Tell Client Conflict.
if ($sth->rowCount() >= 1){
    header("HTTP/1.0 409 Conflict");
    exit();
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
if ($_FILES["img"]){
    $Params[":img"] = $target_file;
    $sql="INSERT INTO `assets` (assetNo, type, make, model, associatedTo, Location, patTestDate, imgLocation)
    VALUES (:assetnumber, :type, :make, :model, :user, :location, :pat, :img)";
}else{

    $sql="INSERT INTO `assets` (assetNo, type, make, model, associatedTo, Location, patTestDate)
    VALUES (:assetnumber, :type, :make, :model, :user, :location, :pat)";
}
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
