<?php
session_start();

$product_id = $_POST['product_id'];
$amount = $_POST['amount'];

$_SESSION['shopping_cart'][$product_id] = $amount;

header('location: ../shopping_cart.php');
