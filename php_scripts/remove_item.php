<?php
session_start();
$productId = $_GET['product_id'];

unset($_SESSION['shopping_cart'][$productId]);

header('location: ../shopping_cart.php');