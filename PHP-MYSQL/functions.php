<?php
 // require Mysql connection
 require('database/DBController.php');

  // require  Product Class
  require('database/Product.php');
// require  Cart Class
require('database/Cart.php');

 // DBcontroller object

$db=new DBController();

//Product object

$product =new Product($db);
$product_shuffle=$product->getData();

// Cart object
$Cart=new Cart($db);




