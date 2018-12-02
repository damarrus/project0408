<?php

require_once '../models/User.php';
require_once '../models/Order.php';
require_once '../models/Product.php';

$products = Product::getAll(false, false);

$order_id= $_GET['order_id'];
$userinfo
$order = new Order($order_id);
require_once '../views/admin_order.php';

var_dump($order->order_id);
var_dump($order->status);
var_dump($order->address);
//$userorder_id = $order->user_id);
var_dump($order->comment);



