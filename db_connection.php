<?php
//localhost
$dbname = 'e-commerce';
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';

//live server
/*
$dbname = '';
$dbhost = '';
$dbusername = '';
$dbpassword = '';
*/
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
}   catch (PDOException $e) {
    echo $e->getMessage();
}