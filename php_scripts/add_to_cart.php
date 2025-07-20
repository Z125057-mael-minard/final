<?php
session_start();

$product_id = $_POST['product_id'];
$product_stock = $_POST['product_stock'];
$amount = $_POST['amount'];

if (isset($_SESSION['shopping_cart'][$product_id])) {
  $_SESSION['shopping_cart'][$product_id] += $amount;
  if ($_SESSION['shopping_cart'][$product_id] > $product_stock) {
    $_SESSION['shopping_cart'][$product_id] = $product_stock;
  }
} else {
  $_SESSION['shopping_cart'][$product_id] += $amount;
}

header('location: ../shopping_cart.php');
