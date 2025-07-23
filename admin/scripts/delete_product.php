<?php
require "../../db_connection.php";

$product_id = $_GET['product_id'];
$stmt = $db->prepare("DELETE FROM products WHERE product_id = $product_id");
$stmt->execute();

header('location: ../dashboard.php');
