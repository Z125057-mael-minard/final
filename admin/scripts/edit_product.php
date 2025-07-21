<?php
require "../../db_connection.php";

session_start();

$user_id = $_POST['user_id'];

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_category_id = $_POST['product_category'];
$product_price = $_POST['product_price'];
$product_stock = $_POST['product_stock'];

if($product_id != NULL && $product_name != NULL && $product_category_id != NULL && $product_price >= 0 && $product_stock >= 0) {
    $data = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'category_id' => $product_category_id,
        'product_price' => $product_price,
        'product_stock' => $product_stock,
    ];

    $sql = "UPDATE products SET product_name=:product_name, category_id=:category_id, product_price=:product_price, product_stock=:product_stock WHERE product_id=:product_id";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);


    header('location: ../dashboard.php');
}
else {
    $_SESSION['admin-edit_product-error_message'] = "Something went wrong!";
    header('location: ../edit_product.php?product_id=' . $product_id);
}
