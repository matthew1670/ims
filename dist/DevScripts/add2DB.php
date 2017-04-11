<?php
require_once '../../vendor/autoload.php';
require '../php/functions.php';
$faker = Faker\Factory::create();
$db = connect();
//Populate the Database with Dubby Data for 50 Entries
try {
    for ($i=0; $i < 50; $i++) {
        PopulateAssets($db);
    }
} catch (Exception $e) {
    echo "There Was An Error: </br>" . $e->getMessage();
}



 ?>
