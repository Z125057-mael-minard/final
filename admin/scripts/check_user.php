<?php
session_start();

require 'db_connection.php';

$logged_in = false;
$is_admin = false;

if (isset($_SESSION["session_token"])) {
    $stmt = $db->prepare("SELECT * FROM current_session WHERE session_token = ?");
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
            $sql = "DELETE FROM current_session WHERE session_token = $session_token";
            $db->query($sql);
            session_destroy();

            $logged_in = false;
        }
        else {
            $stmt = $db->prepare("SELECT * FROM users WHERE user_id = ?");
            $stmt->execute(array($_SESSION["user_id"]));
            $selected_user = $stmt->fetch();

            $is_admin = $selected_user['is_admin'];

            $logged_in = true;
        }
    }
}
else {
    $logged_in = false;
}
