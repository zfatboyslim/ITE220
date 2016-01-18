<?php
$host = "localhost";
$db_name = "stiu";
$username = "root";
$password = "abc12345";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>