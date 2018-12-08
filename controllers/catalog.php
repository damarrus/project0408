<?php
session_start();
// var_dump($_SESSION);
require_once '../models/Product.php';
require_once '../models/Category.php';

require_once '../models/Collection.php';

if (isset($_GET['category_id'])){
    $category_id = $_GET['category_id']; 
} else {
    $category_id = false;
}

if (isset($_GET['collection_id'])){
    $collection_id = $_GET['collection_id']; 
    $collection  = new Collection($collection_id);
    $collection_title = $collection->title;
} else {
    $collection_id = false;
    $collection_title = 'Каталог';
}



$products = Product::getAll($collection_id, $category_id);
$categories = Category::getAll();
require_once '../views/catalog.php';
