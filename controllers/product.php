<?php

require_once '../models/Product.php';
require_once '../models/Size.php';

$product_id = $_GET['id'];

$product = new Product($product_id);

$sizes = Size::getAllbyProduct($product_id);

var_dump($product->price);
require_once '../views/product.php';
