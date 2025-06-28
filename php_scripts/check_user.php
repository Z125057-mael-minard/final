<?php
session_start();
if(!isset($_SESSION['shopping_cart'])){
    $_SESSION['shopping_cart']= array();
}


