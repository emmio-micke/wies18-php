<?php

class Product {
    public function add($name, $description, $price) {
        // Control parameters and add product to db.
    }

    public function getProducts($noOfProducts) {
        // Get the number of products as an array
    }
}

// Page:
$product_obj = new Product();
$products = $product_obj->getProducts(9);

foreach($products as $product) {
    // Print out product.
}