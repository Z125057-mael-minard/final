<?php
session_start();
require __DIR__ . '/../db_connection.php';
$admin = 0;
if ($_SESSION['logged_in']){
  $stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
  $stmt->execute(array($_SESSION["session_token"]));
  $current_session = $stmt->fetch();
  $stmt = $db->prepare("SELECT * FROM users WHERE user_id = ?");
  $stmt->execute(array($current_session['user_id']));
  $user = $stmt->fetch();
  $admin = $user['user_is_admin'];
}

