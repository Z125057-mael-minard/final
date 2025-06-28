<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

session_start();

require __DIR__ . '/../db_connection.php';

// Get the inputs from the form
$email = $_POST['email'];
$password = $_POST['password'];

// This variable holds the success of the login
$logged = false;


// If the user is already logged in dont allow login
if (!$_SESSION['logged_in']){
  // Get the user for this email
  $stmt = $db->prepare("SELECT * FROM users WHERE user_email = ?");
  $stmt->execute(array($email));
  $user = $stmt->fetch();
  // Login check
  if ($user){
    if (password_verify($password, $user['user_password'])){
      $logged = true;
    }
    else{
      $_SESSION['login_error'] = 'Incorrect password.';
    }
  }
  else{
    $_SESSION['login_error'] = 'User not found.';
  }
}
else{
  $_SESSION['login_error'] = 'Already logged in.';
}

// Redirect to index on successful login and to login page on failure
if ($logged) {
  // Verify if there is already a session for that user
  $stmt = $db->prepare("SELECT * FROM sessions WHERE user_id = ?");
  $stmt->execute(array($user['user_id']));
  $current_session = $stmt->fetch();
  // If not then create one
  if ($current_session == null){
    $session_token = hash('sha256', bin2hex(random_bytes(12)));
    $user_id = $user['user_id'];
    $host_name = gethostname();
    $end_time = new DateTime();             
    $end_time->modify('+60 days');         
    $end_time = $end_time->format('Y-m-d');
    $stmt = $db->prepare("INSERT INTO sessions (session_token, user_id, host_name, end_time) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($session_token, $user_id, $host_name, $end_time));
    $_SESSION["session_token"] = $session_token;
  }
  header('location: ../index.php');
}
else{
  header('location: ../login.php');
}
