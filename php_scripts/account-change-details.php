<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

session_start();

require __DIR__ . '/../db_connection.php';

$name = $_POST['name'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$house_nr = $_POST['house_nr'];
$header = 'location: ../account.php';

$stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
$stmt->execute(array($_SESSION["session_token"]));
$current_session = $stmt->fetch();

$stmt = $db->prepare("UPDATE `users` SET `user_name` = ? WHERE `users`.`user_id` = ?");
$stmt->execute(array($name, $current_session['user_id']));
$stmt = $db->prepare("UPDATE `user_addresses` SET `address_country` = ? WHERE `user_addresses`.`user_id` = ?");
$stmt->execute(array($country, $current_session['user_id']));
$stmt = $db->prepare("UPDATE `user_addresses` SET `address_city` = ? WHERE `user_addresses`.`user_id` = ?");
$stmt->execute(array($city, $current_session['user_id']));
$stmt = $db->prepare("UPDATE `user_addresses` SET `address_street` = ? WHERE `user_addresses`.`user_id` = ?");
$stmt->execute(array($street, $current_session['user_id']));
$stmt = $db->prepare("UPDATE `user_addresses` SET `address_house_number` = ? WHERE `user_addresses`.`user_id` = ?");
$stmt->execute(array($house_nr, $current_session['user_id']));
$_SESSION['account_change'] = 'Successfully changed account details';
header($header);
