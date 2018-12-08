<?php
session_start();
require_once '../models/Product.php';


$product_ids = $_SESSION['cart'];
$products = [];
foreach ($product_ids as $product_id) {
    $products[] = new Product($product_id);
}

var_dump($products);
// переход на вьюшку корзины??

require_once '../views/cart.php';

