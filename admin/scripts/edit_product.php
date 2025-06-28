<?php
require "../../db_connection.php";

$user_id = $_POST['user_id'];

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_category_id = $_POST['product_category'];
$product_price = $_POST['product_price'];
$product_stock = $_POST['product_stock'];

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