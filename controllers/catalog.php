<?php
session_start();
// var_dump($_SESSION);
require_once '../models/Product.php';
require_once '../models/Category.php';

if (isset($_GET['category_id'])){
    $category_id = $_GET['category_id']; 
} else {
    $category_id = false;
}

if (isset($_GET['collection_id'])){
    $collection_id = $_GET['collection_id']; 
} else {
    $collection_id = false;
}



$products = Product::getAll($collection_id, $category_id);
$categories = Category::getAll();
require_once '../views/catalog.php';
