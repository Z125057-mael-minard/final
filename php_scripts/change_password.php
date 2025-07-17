<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

session_start();

require __DIR__ . '/../db_connection.php';

$password_old = $_POST['password-old'];
$password_new = $_POST['password-new'];
$header = 'location: ../account.php';

$stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
$stmt->execute(array($_SESSION["session_token"]));
$current_session = $stmt->fetch();
$stmt = $db->prepare("SELECT * FROM users WHERE user_id = ?");
$stmt->execute(array($current_session['user_id']));
$user = $stmt->fetch();


if (password_verify($password_old, $user['user_password'])){
  $_SESSION['last_account_action'] = 'Successfully changed password';
  $user_password = password_hash($password_new, PASSWORD_BCRYPT);
  $stmt = $db->prepare("UPDATE `users` SET `user_password` = ? WHERE `users`.`user_id` = ?");
  $stmt->execute(array($user_password, $current_session['user_id']));
  $_SESSION['account_change'] = 'Successfully changed password.';
  header('location: ../account.php');
}
else{
  $_SESSION['change_error'] = 'Incorrect password.';
  header('location: ../change-password.php');
}
