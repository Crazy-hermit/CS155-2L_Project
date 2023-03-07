<?php

require_once(__DIR__ . '/../model/product_model.php'); //NOTE: __DIR__ needs to be added to go up one folder/level (same goes for other with __DIR__)
require_once(__DIR__ . '/../config.php');

class ProductController {

    //TODO: maybe add check database connection status on constructor?

    function get_all_products() {
        global $conn;
        $sql  = "SELECT * FROM product";
        $result = $conn->query($sql);

        $products = array();
        while($row = $result->fetch_assoc()) {
            $products[] = new Product($row['prod_id'], $row['name'], $row['price'], $row['image']);
        }

        return $products;
    }
}

?>