<?php
/*
API NAME = FETCH FROM DB
API FUNCTION = this api functions to add a new asset to the assets table
checking the following:
>What type of query is being requested.
> Request is GET request
> if success sql retrival or failed
Finally retuning the data in JSON format.
*/
header("Content-type: application/json");
require '../php/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        header("HTTP/1.0 400 Bad Request");
        exit();
}

$searchby = "";
$query = "";
if(isset($_GET['searchby'])) {
    $searchby = strtolower($_GET['searchby']);
}
if(isset($_GET['query'])) {
    $query = $_GET['query'];
}
$conn=connect();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Switch
switch ($searchby) {
    case 'user':
        $sql = "SELECT * FROM assets Where associatedTo like '" . $query . "%'";
        break;
    case 'location':
        $sql = "SELECT * FROM assets Where Location like '" . $query . "%'";
        break;
    case 'assetno':
        $sql = "SELECT * FROM assets Where assetNo like '" . $query . "%'";
        break;
    case 'type':
        $sql = "SELECT * FROM assets Where type like '" . $query . "%'";
        break;
    case 'id':
        $sql = "SELECT * FROM assets Where ID = '" . $query . "'";
        break;
    default:
        $sql = "SELECT * FROM assets" ;
        break;
}

try {
    $sth = $conn->prepare($sql);
    $sth->execute();
    while ($result = $sth->fetchObject()){
        $AllResults[] = $result;
    }
    if (empty($AllResults)){
        header("HTTP/1.0 404 Not Found");
    }else{
    echo json_encode($AllResults);
    }
} catch (Exception $e) {
header("HTTP/1.0 500 Internal Server Error");
}
?>
