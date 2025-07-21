<?php
require "../../db_connection.php";
session_start();

$product_name = $_POST['product_name'];
$category_id = $_POST['product_category_id'];
$product_price = $_POST['product_price'];
$product_stock = $_POST['product_stock'];

if($product_name != "" && $category_id != "" && $product_price >= 0 && $product_stock >= 0){
    $data = [
        'product_name' => $product_name,
        'category_id' => $category_id,
        'product_price' => $product_price,
        'product_stock' => $product_stock,
    ];

    $sql = "INSERT INTO products (product_name, category_id, product_price, product_stock) VALUES (:product_name, :category_id, :product_price, :product_stock)";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);
    header('location: ../dashboard.php');
}
else {
    $_SESSION['admin-add_product-error_message'] = "Something went wrong!";
    header('location: ../add_product.php');
}