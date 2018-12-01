<?php

require_once '../models/Product.php';

$product_id = $_GET['id'];

$product = new Product($product_id);

// var_dump($product->price);
