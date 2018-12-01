<?php

require_once '../db.php';

class Product 
{
    public $id;
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $collection_id;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM products WHERE product_id=$id";
        $result = $mysqli->query($query);

        $product_data = $result->fetch_assoc();

        $this->id = $product_data['product_id'];
        $this->title = $product_data['title'];
        $this->description = $product_data['description'];
        $this->price = $product_data['price'];
        $this->category_id = $product_data['category_id'];
        $this->collection_id = $product_data['collection_id'];
    }

    public static function getAll($category_id = false)
    {
        global $mysqli;

        $query = "SELECT product_id FROM products";
        $result = $mysqli->query($query);

        $products = [];
        while ($product_data = $result->fetch_assoc()) {
            $products[] = new Product($product_data['product_id']);
        }

        return $products;
    }

    public static function create($title, $description, $price, $category_id, $collection_id)
    {
        global $mysqli;

        $query = "INSERT INTO products (title, description, price, category_id, collection_id)
                  VALUES ('$title', '$description', '$price', '$category_id', '$collection_id')";

        $mysqli->query($query);
    }

    public function update($title, $description, $price, $category_id, $collection_id) 
    {
        global $mysqli;

        $query = "UPDATE products SET title='$title', description='$description', price='$price', category_id='$category_id', collection_id='$collection_id'
                  WHERE product_id=$this->id";

        $mysqli->query($query);
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM products WHERE product_id=$this->id";

        $mysqli->query($query);
    }
}
