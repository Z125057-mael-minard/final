<?php
session_start();

require __DIR__ . '/../db_connection.php';

$logged_in = false;
$is_admin = false;

// CHECK SESSION
if (isset($_SESSION["session_token"])) {
    $stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
    $stmt->execute(array($_SESSION["session_token"]));
    $current_session = $stmt->fetch();

    if($current_session == null){
        session_destroy();
        $logged_in = false;
    }
    else {
        $current_time = date("Y-m-d H:i:s");
        $end_time = $current_session['end_time'];

        if($current_time >= $end_time || $current_session['host_name'] != gethostname()){
            $session_token = $_SESSION["session_token"];
            $sql = "DELETE FROM sessions WHERE session_token = $session_token";
            $db->query($sql);
            session_destroy();

            $logged_in = false;

        }
        else {
            $stmt = $db->prepare("SELECT * FROM users WHERE user_id = ?");
            $stmt->execute(array($current_session['user_id']));
            $selected_user = $stmt->fetch();


            $is_admin = $selected_user['user_is_admin'];

            $logged_in = true;
        }
    }
}
else {
    $logged_in = false;
}

$_SESSION['logged_in'] = $logged_in;

if(!isset($_SESSION['shopping_cart'])){
    $_SESSION['shopping_cart']= array();
}
