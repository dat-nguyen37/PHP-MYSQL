<?php

// require Mysql connection
require('../database/DBController.php');
// require  Product Class
require('../database/Product.php');
// DBcontroller object
$db = new DBController();
//Product object

$product = new Product($db);


if (isset($_POST['itemid'])) {
    $result = $product->getproduct($_POST['itemid']);
    echo json_encode($result);
}
