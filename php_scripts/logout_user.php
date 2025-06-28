<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require __DIR__ . '/../db_connection.php';

if (isset($_SESSION["session_token"])) {
  $stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
  $stmt->execute(array($_SESSION["session_token"]));
  $current_session = $stmt->fetch();
  if($current_session == null){
    session_destroy();
    $logged_in = false;
  }
  else {
    $session_token = $_SESSION["session_token"];
    $stmt = $db->prepare("DELETE FROM sessions WHERE session_token = ?");
    $stmt->execute(array($_SESSION["session_token"]));
    session_destroy();
  }
}

header('location: ../index.php');
