<?php
require "../db_connection.php";

$user_id = $_POST['user_id'];

try {
    $result = $db->query("SELECT 1 FROM collection_table_user$user_id LIMIT 1");
} catch (Exception $e) {
    $sql = "CREATE Table collection_Table_User$user_id (
        user_id INT(6),
        model_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        model_categoryid INT(6),
        model_nrof INT(5),
        model_name VARCHAR(50),
        model_imagelocation VARCHAR(50),
        model_visibility BOOLEAN,
        model_color VARCHAR(50)
        )";
    $stmt= $db->prepare($sql);
    $stmt->execute();
}

if($_POST['form_type'] == "delete_model"){
    $model_id = $_POST['model_id'];
    $model_visibility = 0;

    $data = [
        'model_id' => $model_id,
        'model_visibility' => $model_visibility,
    ];

    $sql = "UPDATE collection_table_user$user_id SET model_visibility=:model_visibility WHERE model_id=:model_id";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);
}

header('location: ../index.php');