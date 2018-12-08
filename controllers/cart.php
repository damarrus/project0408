<?php
// session_start();
require_once 'add_cart.php';


// забирать из сессии товары


$products = $_SESSION['cart'];

foreach ($products as $product) {

}


// переход на вьюшку корзины??
// Header("Location: ../views/cart.php?product_id={$prodId}");
// }


require_once '../views/cart.php';

