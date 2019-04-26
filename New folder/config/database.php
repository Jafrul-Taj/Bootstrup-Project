<?php
// used to connect to the database
$host = "DESKTOP-6EO4U7F";
$db_name = "NewDatabase";
$username = "JafrulHasan";
$password = "123456";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>