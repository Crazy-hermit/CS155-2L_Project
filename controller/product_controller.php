<?php

require('../model/product_model.php');
require('../config.php')

class ProductController {

    //(maybe add check database connection status on constructor)

    function get_all_products() {
        $sql  = "SELECT * FROM product";
        $result = $conn->query($sql);

        $products = array();
        while($row = $result->fetch_assoc()) {
            $products[] = new Product($row['prod_id'], $row['name'], $row['price'], $['image']);
        }

        return products;
    }
}

?>