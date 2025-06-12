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
            model_rarity VARCHAR(10),
            model_visibility BOOLEAN,
            model_color VARCHAR(50)
            )";
    $stmt= $db->prepare($sql);
    $stmt->execute();
}

if($_POST['form_type'] == "add_model"){
    $model_name = $_POST['model_name'];
    $model_categoryid = $_POST['model_categoryid'];
    $model_nrof = $_POST['model_nrof'];
    $model_imagefile_name = $_FILES["model_imagefile"]["name"];
    $model_image_name = $_POST['model_image_name'];
    $model_rarity = $_POST['model_rarity'];

    if ($_FILES["model_imagefile"]["name"] != null) {
        $uploadDir = "../imgs/";
        $uploadFile = $uploadDir . basename($_FILES["model_imagefile"]["name"]);
        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

        // Check if the file is an actual image
        $check = getimagesize($_FILES["model_imagefile"]["tmp_name"]);
        if ($check !== false) {
            // Check if the file already exists (optional, you can handle this based on your needs)
            if (file_exists($uploadFile)) {
                echo "File already exists. Please rename the file and try again.";
                move_uploaded_file($_FILES["model_imagefile"]["tmp_name"], $uploadFile);
            } else {
                // Check file size (you can set your own size limit)
                if ($_FILES["model_imagefile"]["size"] > 5000000) {
                    echo "File is too large. Please choose a smaller file.";
                    dd();
                } else {
                    // Allow only specific image file formats (you can add more if needed)
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        echo "Only JPG, JPEG, PNG & GIF files are allowed.";
                        dd();
                    } else {
                        if (move_uploaded_file($_FILES["model_imagefile"]["tmp_name"], $uploadFile)) {
                            echo "The image has been uploaded successfully.";
                            dd();
                            // You can do additional processing or database update here if needed.
                        } else {
                            echo "Error uploading the file. Please try again.";
                            dd();
                        }
                    }
                }
            }
        } else {
            echo "File is not an image. Please upload an image file.";
        }
    }

    if($model_imagefile_name == null){
        $image_name = $model_image_name;
    }
    else {
        $image_name = $model_imagefile_name;
    }

    $data = [
        'user_id' => $user_id,
        'model_categoryid' => $model_categoryid,
        'model_nrof' => $model_nrof,
        'model_name' => $model_name,
        'model_imagelocation' => $image_name,
        'model_rarity' => $model_rarity,
    ];

    $sql = "INSERT INTO collection_table_user$user_id (user_id, model_categoryid, model_nrof, model_name, model_imagelocation, model_rarity) VALUES (:user_id, :model_categoryid, :model_nrof, :model_name, :model_imagelocation, :model_rarity)";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);
}

header('location: ../index.php');