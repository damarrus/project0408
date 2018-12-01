<?php

require_once '../models/Product.php';

$products = Product::getAll(false, false);

require_once '../views/catalog.php';
