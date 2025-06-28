<?php

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

session_start();

require __DIR__ . '/../db_connection.php';

// Get the inputs from the form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

// This variable holds the success of the registration 
$registered = false;


// If the user is already logged in dont allow register 
if (!$_SESSION['logged_in']){
  $stmt = $db->prepare("SELECT * FROM users WHERE user_email = ?");
  $stmt->execute(array($email));
  $user = $stmt->fetch();
  if (!$user){
    if ($password == $password_confirm){
      $registered = true;
    }
    else{
      $_SESSION['register_error'] = 'The passwords do not match.';
    }
  }
  else{
    $_SESSION['register_error'] = 'This email is already registered to a user.';
  }
}
else{
  $_SESSION['register_error'] = 'Already logged in.';
}

// Show success or redirect to register page
if ($registered) {
  $user_password = password_hash($password, PASSWORD_BCRYPT);
  $stmt = $db->prepare("INSERT INTO users (user_name, user_email, user_password, user_is_admin) VALUES (?, ?, ?, ?)");
  $stmt->execute(array($name, $email, $user_password, 0));
  echo '<h2 class="successful-register">Successfully created account!</h2>';
  echo '<a href="../login.php">Go back to login</a>';
}
else{
  header('location: ../register.php');
}
