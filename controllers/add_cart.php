<?php
session_start();

require_once '../models/Product.php';
 
// if (!$id) {
// Указано не число или ноль. Можно ошибку выводить или возвращать назад
// }
 
// Добавление ID товара в корзину

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
$products = isset($_GET['product_id']) ? $_GET['product_id'] : null;
if(!empty($products)){
    $_SESSION['cart'][] = $products;
    Header("Location: cart.php?product_id={$products}");
}
// print_r($_SESSION['cart']);

// $cart = $_SESSION['product_id'];


require_once 'cart.php';
// echo success;