  
<?php

// require MySQL Connection
require('Database/DBController.php');

// require Product Class
require('Database/Product.php');

// require Cart Class
require('Database/Cart.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db);
?>