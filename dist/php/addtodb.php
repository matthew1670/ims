<?php
header("Content-type: application/json");
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("HTTP/1.0 400 Bad Request");
}
require '../php/functions.php';
$AssetNo = $_POST["Assetno"];
$AssetType = $_POST["assettype"];
$AssetMake = $_POST["Make"];
$AssetModel = $_POST["Model"];
$AssetAdded = $_POST["AddedOn"];
$AssetLocation = $_POST["Location"];
$AssetPatTest = $_POST["PatTest"];
$AssetUser = $_POST["User"];

$Values = array('Number' => $AssetNo,
                'Type' => $AssetType,
                'Make' => $AssetMake,
                'Model' => $AssetModel,
                'Added-Date' => $AssetAdded,
                'Location' => $AssetLocation,
                'Pat Test Date' => $AssetPatTest,
                'Associated User' => $AssetUser);
$error = false;
foreach ($Values as $variable => $value) {
    if (!isset($variable) or empty($value)){
        echo "$variable";
        $missing[] = "$variable";
        $error = true;
    }
}
if ($error){
    $errorMsg = array('Errors In' => $missing);
    header("HTTP/1.0 400 Bad Request");
    echo json_encode($errorMsg);
    exit();
}
$sql="INSERT INTO assets ()";
// $sth = $conn->prepare($sql);
// $sth->execute();

?>
