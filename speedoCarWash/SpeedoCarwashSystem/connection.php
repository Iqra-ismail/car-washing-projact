<?php
 
$username="root";
$password="";
$server='localhost';
$db='contactform';

try {
    $con = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection filled " . $e->getMessage();
}


?>