<?php

class Product {
    private $id;
    private $name;
    private $price;
    private $image;

    function __construct($id, $name, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    function get_id() {
        return $this->id;
    }

    function set_id($id) {
        $this->id = $id;
    }
    
    function get_name() {
        return $this->name;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_price() {
        return $this->price;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function get_image() {
        return $this->image;
    }

    function set_id($image) {
        $this->image = $image;
    }
}

?>