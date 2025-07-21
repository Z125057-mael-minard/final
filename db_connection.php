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
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch (PDOException $e) {
    echo $e->getMessage();
}