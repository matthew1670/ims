<?php
include('include.php');


function connect(){
    try {
        $db = new PDO("mysql:host=localhost;dbname="."mwood", USERNAME, PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}

//Function to Check If User is logged in.
function Login_Check(){
    if (!isset($_COOKIE['logged_In'])) {
        header('Location: /login.php');
    }
}

function logout(){
    unset($_COOKIE["logged_In"]);
    header('Location: /login.php');
}

//DEVELOPMENT FUNCTIONS
function CreateAssetsTable($conn){
    try {
        $sql = "CREATE TABLE assets(
                  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  assetNo VARCHAR(30) NOT NULL,
                  TYPE VARCHAR(30) NOT NULL,
                  make VARCHAR(30) NOT NULL,
                  model VARCHAR(30) NOT NULL,
                  added TIMESTAMP,
                  associatedTo VARCHAR(30) NOT NULL,
                  Location VARCHAR(255) NOT NULL,
                  patTestDate DATETIME
                )";
            $conn->exec($sql);
            echo "Table MyGuests created successfully";
    }
    catch (PDOException $e) {
        echo "There Was an Error while creating the table:" . $e->getMessage();
    }
}

function PopulateAssets($conn){

    try {
        $faker = Faker\Factory::create();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Arrays for Random Data
        $TypesArray = array('Laptop','Desktop','Harddrive', 'Projector');
        $LocationArray = array('Room1','Room2','Room3', 'Room4');
        $MakeArray = array('Toshiba','HP','Samsung','Dell');
        //Faker Data Generator
        $assetno = "00" . $faker->numberBetween($min = 100, $max = 999);
        $type = $faker->randomElement($TypesArray);
        $location = $faker->randomElement($LocationArray);
        $make = $faker->randomElement($MakeArray);
        $patTestDate = $faker->dateTimeBetween($startDate = "-2 years")->format("Y-m-d h:i:s");
        $dateAdded = $faker->dateTimeBetween($startDate = "-10 years")->format("Y-m-d h:i:s");
        $username = strtolower($faker->randomLetter . $faker->lastName);
        $model = strtoupper($faker->lexify('???' . $faker->numberBetween($min = 00, $max = 99)));
        //SQL QUERY
        $sql="INSERT INTO assets (`assetNo`, `type`, `make`, `model`, `added`, `associatedTo`, `Location`, `patTestDate`)
                          VALUES ('$assetno', '$type', '$make', '$model', '$dateAdded', '$username', '$location', '$patTestDate')";
        //Prep and Execute the SQL
        $sth = $conn->prepare($sql);
        $sth->execute();
    } catch (PDOException $e) {
        echo "There Was An Error: <br/>" . $e->getMessage() ;
    }

}

function addDefaultAdminUser(){
    $password = md5("Matthew");
    $conn = connect();
    $sql = "INSERT INTO users (`FirstName` , `LastName`, `Email`, `Username`, `Password`, `Admin`)
        VALUES (:Fname, :Lname, :Email, :Username, :Password , :Admin)";
    $params = array(':Fname' => "Matthew",
                    ':Lname' => "Wood",
                    ':Email' => "Matthew@me.com",
                    ':Username' => "Mwood",
                    ':Password' => "$password",
                    ':Admin' => "1"
                    );
    $sth = $conn->prepare($sql);
    $sth->execute($params);
}


?>
