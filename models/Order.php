<?php

require_once '../db.php';

class Order 
{
    public $id;
    public $status;
    public $address;
    public $user_id;
    public $comment;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM orders WHERE order_id=$id";
        $result = $mysqli->query($query);

        $order_data = $result->fetch_assoc();

        $this->id = $order_data['order_id'];
        $this->status = $order_data['status'];
        $this->address = $order_data['address'];
        $this->user_id = $order_data['user_id'];
        $this->comment = $order_data['comment'];
    }

    public static function getAll() 
    {
        global $mysqli;

        $query = "SELECT order_id FROM orders";
        $result = $mysqli->query($query);

        $orders = [];
        while ($order_data = $result->fetch_assoc()) {
            $orders[] = new Order($order_data['order_id']);
        }

        return $orders;
    }

    public static function create($status, $address, $user_id, $comment)
    {
        global $mysqli;

        $query = "INSERT INTO orders (status, address, user_id, comment)
                  VALUES ('$status', '$address', '$user_id', '$comment')";

        $mysqli->query($query);
        var_dump($query);
    }

    public function update($status, $address, $user_id, $comment) 
    {
        global $mysqli;

        $query = "UPDATE orders SET status='$status', address='$address', user_id='$user_id', comment='$comment'
                  WHERE order_id=$this->id";

        $mysqli->query($query);
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM orders WHERE order_id=$this->id";

        $mysqli->query($query);
    }
}

$orders = Order::getAll();
var_dump($orders);

echo '<hr>';

$order = new Order(1);
var_dump($order);

Order::create('1','Piterburg','1','Доставка');