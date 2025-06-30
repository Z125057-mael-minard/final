<?php

session_start();

require "../db_connection.php";

$shipping_name = $_POST['shipping_name'];
$shipping_country = $_POST['shipping_country'];
$shipping_city = $_POST['shipping_city'];
$shipping_street = $_POST['shipping_street'];
$shipping_houseNr = $_POST['shipping_houseNr'];

$creditcard_name = $_POST['creditcard_name'];
$creditcard_expDate = $_POST['creditcard_expDate'];
$creditcard_csv = $_POST['creditcard_csv'];

$current_datetime = date("Y-m-d H:i:s");

//Add order
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}
else {
    $user_id = 0;
}
$data = [
    'order_date' => $current_datetime,
    'user_id' => $user_id,
    'order_country' => $shipping_country,
    'order_city' => $shipping_city,
    'order_street' => $shipping_street,
    'order_housenr' => $shipping_houseNr,
    'order_name' => $shipping_name,
];

$sql = "INSERT INTO orders (order_date, user_id, order_country, order_city, order_street, order_housenr, order_name) VALUES (:order_date, :user_id, :order_country, :order_city, :order_street, :order_housenr, :order_name)";
$stmt= $db->prepare($sql);
$stmt->execute($data);

//Get order ID
$sql = "SELECT order_id FROM orders WHERE order_date = '$current_datetime' AND user_id = '$user_id' AND order_country = '$shipping_country' AND order_city = '$shipping_city' AND order_street = '$shipping_street' AND order_housenr = '$shipping_houseNr' AND order_name = '$shipping_name'";
$order_id = $db->query($sql)->fetch(PDO::FETCH_OBJ);

//Add Order rows
$shoppingCart_products = $_SESSION['shopping_cart'];

foreach ($shoppingCart_products as $productId => $amount):{
    $data = [
        'order_id' => $order_id->order_id,
        'product_id' => $productId,
        'order_product_amount' => $amount,
    ];

    $sql = "INSERT INTO order_rows (order_id, product_id, order_product_amount) VALUES (:order_id, :product_id, :order_product_amount)";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);
};endforeach;

header('location: ../index.php');