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
$products = isset($_POST['product_id']) ? $_POST['product_id'] : null;
if(!empty($products)){
    $_SESSION['cart'][] = $products;
}

echo true;